<section id="projects" class="py-24 max-w-275 mx-auto px-4 sm:px-8">
    <p class="font-mono text-sm text-accent uppercase tracking-[2px] mb-3 flex items-center gap-2.5">
        <span class="w-0.5 h-4 bg-accent shrink-0 animate-blink" aria-hidden="true"></span>
        Selected work
    </p>
    <h2 class="text-2xl font-semibold tracking-tight mb-3">Projects</h2>
    <p class="text-text-secondary mb-12">Live, revenue-generating systems I built and maintain as a solo developer.</p>

    <div class="space-y-8">
        {{-- NordWoodArt --}}
        <article class="bg-bg-card border border-white/6 rounded-xl overflow-hidden hover:border-accent/20 hover:-translate-y-0.5 transition-all duration-300">
            <div class="w-full h-70 max-md:h-45 bg-[#1e2133] flex items-center justify-center text-text-secondary font-mono text-[0.85rem] border-b border-white/6 flex-col gap-2">
                <span>nordwoodart.hu screenshot</span>
            </div>
            <div class="p-8">
                <p class="font-mono text-[0.7rem] text-accent-green uppercase tracking-[1.5px] mb-2">E-Commerce Platform</p>
                <h3 class="text-[1.4rem] font-semibold tracking-tight mb-3">NordWoodArt &mdash; Artisan Wooden Wall Art</h3>
                <p class="text-text-secondary text-[0.95rem] leading-relaxed mb-6">
                    Complete e-commerce platform built from scratch. Manages 200+ product variants across multiple sizes, colors, and categories. Features automated image processing pipeline, Blender 3D rendering integration, payment processing, SEO optimization, and a full FilamentPHP admin panel for inventory and order management.
                </p>
                <div class="flex flex-wrap gap-2 mb-6">
                    @foreach (['Laravel', 'FilamentPHP', 'Livewire', 'Tailwind CSS', 'Alpine.js', 'MySQL', 'Python', 'Blender API'] as $tag)
                        <span class="font-mono text-[0.7rem] px-2.5 py-1 rounded-md bg-accent/10 text-accent border border-accent/15">{{ $tag }}</span>
                    @endforeach
                </div>
                <div class="flex gap-4">
                    <a href="https://nordwoodart.hu" target="_blank" rel="noopener noreferrer" class="font-mono text-sm text-text-secondary hover:text-accent transition-colors flex items-center gap-1.5">
                        &nearr; Live site
                    </a>
                    <a href="#demo" class="font-mono text-sm text-text-secondary hover:text-accent transition-colors flex items-center gap-1.5">
                        &#9889; Try admin panel
                    </a>
                </div>
            </div>
        </article>

        {{-- Coming Soon --}}
        <article class="bg-bg-card border border-white/6 border-dashed rounded-xl p-8 opacity-60">
            <p class="font-mono text-[0.7rem] text-accent-yellow uppercase tracking-[1.5px] mb-2">Coming soon</p>
            <h3 class="text-[1.4rem] font-semibold tracking-tight mb-3">Open Source &amp; GitHub Projects</h3>
            <p class="text-text-secondary text-[0.95rem] leading-relaxed mb-6">
                FilamentPHP packages, Laravel starter kits, and automation tools I'm working on. Stay tuned.
            </p>
            <div class="flex flex-wrap gap-2">
                @foreach (['GitHub', 'Open Source', 'FilamentPHP Plugin'] as $tag)
                    <span class="font-mono text-[0.7rem] px-2.5 py-1 rounded-md bg-accent/10 text-accent border border-accent/15">{{ $tag }}</span>
                @endforeach
            </div>
        </article>
    </div>
</section>
