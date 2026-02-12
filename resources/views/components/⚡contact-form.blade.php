<?php

use Livewire\Component;
use Livewire\Attributes\Validate;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Http;

new class extends Component
{
    #[Validate('required|min:2|max:100')]
    public string $name = '';

    #[Validate('required|email|max:255')]
    public string $email = '';

    #[Validate('required|min:10|max:2000')]
    public string $message = '';

    public string $website = '';

    public string $turnstileToken = '';

    public bool $sent = false;
    public string $error = '';

    public function submit(): void
    {
        $this->error = '';

        // Honeypot — bots fill hidden fields
        if ($this->website !== '') {
            $this->sent = true;
            return;
        }

        // Rate limiting — 3 per hour per IP
        $key = 'contact-form:' . request()->ip();
        if (RateLimiter::tooManyAttempts($key, 3)) {
            $seconds = RateLimiter::availableIn($key);
            $minutes = (int) ceil($seconds / 60);
            $this->error = "Too many messages. Please try again in {$minutes} minute(s).";
            return;
        }

        // Turnstile verification
        if (config('services.turnstile.secret_key')) {
            $response = Http::asForm()->post('https://challenges.cloudflare.com/turnstile/v0/siteverify', [
                'secret' => config('services.turnstile.secret_key'),
                'response' => $this->turnstileToken,
                'remoteip' => request()->ip(),
            ]);

            if (! $response->json('success')) {
                $this->error = 'Bot verification failed. Please try again.';
                return;
            }
        }

        $this->validate();

        Mail::to(config('mail.from.address'))->send(
            new ContactMail($this->name, $this->email, $this->message)
        );

        RateLimiter::hit($key, 3600);

        $this->reset(['name', 'email', 'message', 'turnstileToken', 'error']);
        $this->sent = true;
    }
};
?>

<div>
    @if ($sent)
        <div class="bg-accent-green/10 border border-accent-green/30 rounded-xl p-6 text-center" role="status" aria-live="polite">
            <svg class="w-12 h-12 text-accent-green mx-auto mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
            </svg>
            <p class="text-accent-green font-semibold mb-1">Message sent!</p>
            <p class="text-text-secondary text-sm">I'll get back to you shortly.</p>
        </div>
    @else
        <form wire:submit="submit" class="space-y-4">
            {{-- Honeypot — hidden from humans, bots fill it --}}
            <div class="absolute opacity-0 -z-10" aria-hidden="true" tabindex="-1">
                <label for="website">Website</label>
                <input wire:model="website" type="text" id="website" name="website" autocomplete="off" tabindex="-1">
            </div>

            {{-- Error message --}}
            @if ($error)
                <div class="bg-accent-red/10 border border-accent-red/30 rounded-lg p-3 text-accent-red text-sm" role="alert">
                    {{ $error }}
                </div>
            @endif

            {{-- Name --}}
            <div>
                <label for="name" class="block text-sm font-medium text-text-secondary mb-1">Name</label>
                <input
                    wire:model.blur="name"
                    type="text"
                    id="name"
                    placeholder="Your name"
                    class="w-full bg-bg-card border border-white/6 rounded-lg px-4 py-3 text-text-primary placeholder-text-secondary/50 focus:outline-none focus:border-accent transition-colors"
                >
                @error('name')
                    <p class="text-accent-red text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            {{-- Email --}}
            <div>
                <label for="email" class="block text-sm font-medium text-text-secondary mb-1">Email</label>
                <input
                    wire:model.blur="email"
                    type="email"
                    id="email"
                    placeholder="you@example.com"
                    class="w-full bg-bg-card border border-white/6 rounded-lg px-4 py-3 text-text-primary placeholder-text-secondary/50 focus:outline-none focus:border-accent transition-colors"
                >
                @error('email')
                    <p class="text-accent-red text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            {{-- Message --}}
            <div>
                <label for="message" class="block text-sm font-medium text-text-secondary mb-1">Message</label>
                <textarea
                    wire:model="message"
                    rows="5"
                    class="w-full rounded-lg bg-bg-deep border border-white/6 px-4 py-3 text-text-primary focus:border-accent focus:outline-none"
                    placeholder="Tell me about your project..."
                ></textarea>

                <p class="text-xs text-text-secondary/40 mt-2">
                    A few lines about your project are enough to begin.
                </p>
                @error('message')
                    <p class="text-accent-red text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            {{-- Cloudflare Turnstile --}}
            @if (config('services.turnstile.site_key'))
                <div
                    x-data
                    x-init="
                        const wait = setInterval(() => {
                            if (typeof turnstile !== 'undefined') {
                                clearInterval(wait);
                                turnstile.render($refs.turnstile, {
                                    sitekey: '{{ config('services.turnstile.site_key') }}',
                                    theme: 'dark',
                                    callback: (token) => $wire.set('turnstileToken', token),
                                });
                            }
                        }, 100)
                    "
                >
                    <div x-ref="turnstile"></div>
                </div>
            @endif

            {{-- Submit --}}
            <button
                type="submit"
                class="w-full bg-accent text-bg-deep py-3 rounded-lg font-medium hover:bg-accent/90 transition-colors disabled:opacity-50"
                wire:loading.attr="disabled"
                wire:loading.attr="aria-busy"
            >
                <span wire:loading.remove>Send message</span>
                <span wire:loading aria-live="polite">Sending...</span>
            </button>
        </form>
    @endif
</div>
