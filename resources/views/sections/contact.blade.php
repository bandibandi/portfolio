<section id="contact" class="py-24 max-w-275 mx-auto px-4 sm:px-8">
    <p class="font-mono text-sm text-accent uppercase tracking-[2px] mb-3 flex items-center gap-2.5">
        <span class="w-0.5 h-4 bg-accent shrink-0 animate-blink" aria-hidden="true"></span>
        Get in touch
    </p>
    <h2 class="text-2xl font-semibold tracking-tight mb-3">Let's work together</h2>
    <p class="text-text-secondary mb-12">
        Available for freelance projects, contract work, and long-term partnerships. Reach me at
        <a href="mailto:hello@andrashorvath.dev" class="text-accent hover:underline">hello@andrashorvath.dev</a>
        or fill out the form below.
    </p>

    {{-- Contact Form --}}
    <div class="max-w-lg mx-auto">
        @livewire('contact-form')
    </div>
</section>
