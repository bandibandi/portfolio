<section id="contact" class="py-24 max-w-275 mx-auto px-4 sm:px-8">
    <p class="font-mono text-sm text-accent uppercase tracking-[2px] mb-3 flex items-center gap-2.5">
        <span class="w-0.5 h-4 bg-accent shrink-0 animate-blink" aria-hidden="true"></span>
        Get in touch
    </p>

    <h2 class="text-2xl font-semibold tracking-tight mb-3">Let’s work together</h2>

    <p class="text-text-secondary mb-4">
        If you’re looking for a reliable way to replace spreadsheets, automate internal workflows,
        or build a production-grade admin system, I can help.
    </p>

    <p class="text-text-secondary mb-6">
        Email me at
        <a href="mailto:hello@andrashorvath.dev" class="text-accent hover:underline">
            hello@andrashorvath.dev
        </a>
        or use the form below.
    </p>

    <p class="font-mono text-sm text-text-secondary/70 mb-12">
        Usually reply within <span class="text-text-primary">24 hours</span>.
    </p>

    {{-- Contact Form (CLS-safe placeholder height + lazy slot) --}}
    <div class="max-w-lg mx-auto min-h-[520px]" id="contact-form-slot" aria-live="polite">
        {{-- Optional: lightweight skeleton so it doesn't feel empty --}}
        <div class="rounded-xl border border-white/6 bg-bg-card/40 p-6">
            <div class="h-4 w-28 bg-white/10 rounded mb-4"></div>
            <div class="space-y-3">
                <div class="h-11 bg-white/10 rounded"></div>
                <div class="h-11 bg-white/10 rounded"></div>
                <div class="h-28 bg-white/10 rounded"></div>
                <div class="h-11 bg-white/10 rounded"></div>
            </div>
            <p class="text-xs text-text-secondary/50 mt-4">Loading contact form…</p>
        </div>
    </div>

    <script>
        (function () {
            const slot = document.getElementById('contact-form-slot');
            if (!slot) return;

            const load = async () => {
                const html = await fetch('/contact-fragment', {
                    headers: { 'X-Requested-With': 'XMLHttpRequest' }
                }).then(r => r.text());
                slot.innerHTML = html;
            };

            // Lazy: load when near viewport (keeps initial render lighter)
            const obs = new IntersectionObserver((entries) => {
                if (!entries[0].isIntersecting) return;
                obs.disconnect();
                load();
            }, { rootMargin: '400px' });

            obs.observe(slot);
        })();
    </script>
</section>
