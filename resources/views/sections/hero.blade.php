<section id="hero" class="min-h-[75vh] flex items-center justify-center pt-24 relative overflow-hidden">

    {{-- Floating glow --}}
    <div class="absolute -top-[40%] right-[10%] w-250 h-250 bg-[radial-gradient(circle,rgba(122,162,247,0.08),transparent_50%)] pointer-events-none animate-float blur-3xl will-change-transform"></div>

    <div class="max-w-275 w-full px-4 sm:px-8 relative z-10">
        <p class="font-mono text-sm text-accent mb-6 flex items-center gap-2.5"
           x-data="{ text: '', full: 'Available for new projects', i: 0 }"
           x-init="const t = setInterval(() => { if (i < full.length) { text += full[i]; i++; } else clearInterval(t); }, 50)"
        >
            <span class="w-0.5 h-4 bg-accent shrink-0 animate-blink" aria-hidden="true"></span>
            <span x-text="text"></span>
            <span class="sr-only">Available for new projects</span>
        </p>

        <h1 class="text-balance text-[clamp(2.5rem,6vw,4.2rem)] font-bold leading-[1.15] tracking-tight mb-6">
            I build the
            <span class="bg-gradient-to-br from-accent to-accent-green bg-clip-text text-transparent">
                systems
            </span>
            that real businesses run on.
        </h1>

        <p class="text-lg text-text-secondary max-w-4xl leading-relaxed mb-10">
            I design and build <strong class="text-text-primary font-semibold">business systems, internal tools, and automation platforms</strong>
            for companies that outgrow spreadsheets. Less manual work, fewer errors, faster decisions.
        </p>

        <div class="flex flex-wrap gap-4">
            <a
                href="#projects"
                class="px-7 py-3 rounded-lg font-medium text-base bg-accent text-bg-deep hover:shadow-[0_0_30px_rgba(122,162,247,0.15)] hover:-translate-y-0.5 transition-all duration-300"
            >
                See my work
            </a>

            <a
                href="#demo"
                class="px-7 py-3 rounded-lg font-medium text-base border border-white/6 text-text-primary hover:border-accent hover:text-accent transition-all duration-300"
            >
                Live admin demo →
            </a>
        </div>

        <p class="mt-16 text-sm text-text-secondary/60 font-mono tracking-wide italic">
            "Well-architected software compounds in value over time."
        </p>
    </div>
</section>
