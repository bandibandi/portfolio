<?php

use Livewire\Component;
use Livewire\Attributes\Validate;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

new class extends Component
{
    #[Validate('required|min:2|max:100')]
    public string $name = '';

    #[Validate('required|email|max:255')]
    public string $email = '';

    #[Validate('required|min:10|max:2000')]
    public string $message = '';

    public bool $sent = false;

    public function submit(): void
    {
        $this->validate();

        Mail::to('hello@andrashorvath.dev')->send(
            new ContactMail($this->name, $this->email, $this->message)
        );

        $this->reset(['name', 'email', 'message']);
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
                    wire:model.blur="message"
                    id="message"
                    rows="5"
                    placeholder="Tell me about your project..."
                    class="w-full bg-bg-card border border-white/6 rounded-lg px-4 py-3 text-text-primary placeholder-text-secondary/50 focus:outline-none focus:border-accent transition-colors resize-none"
                ></textarea>
                @error('message')
                    <p class="text-accent-red text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

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
