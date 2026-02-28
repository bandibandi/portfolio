<section id="projects" class="py-24 max-w-275 mx-auto px-4 sm:px-8">
    <p class="font-mono text-sm text-accent uppercase tracking-[2px] mb-3 flex items-center gap-2.5">
        <span class="w-0.5 h-4 bg-accent shrink-0 animate-blink" aria-hidden="true"></span>
        Selected work
    </p>
    <h2 class="text-2xl font-semibold tracking-tight mb-3">Projects</h2>
    <p class="text-text-secondary mb-12">Live, revenue-generating systems I build and maintain end-to-end.</p>

    <div class="space-y-8">
        {{-- NordWoodArt --}}
        <article class="bg-bg-card border border-white/6 rounded-xl overflow-hidden hover:border-accent/20 hover:-translate-y-0.5 transition-all duration-300">
            <picture>
                <source srcset="{{ asset('images/nwa.webp') }}" type="image/webp">
                <img
                    src="{{ asset('images/nwa.jpg') }}"
                    alt="NordWoodArt e-commerce platform"
                    width="1440"
                    height="900"
                    class="w-full h-105 max-md:h-65 object-cover object-top border-b border-white/6"
                    loading="lazy"
                >
            </picture>

            <div class="p-8">
                <p class="font-mono text-xs text-accent-green uppercase tracking-[1.5px] mb-2">E-Commerce Platform</p>
                <h3 class="text-[1.4rem] font-semibold tracking-tight mb-4">NordWoodArt &mdash; Artisan Wooden Wall Art</h3>

                {{-- Case snapshot --}}
                <div class="grid md:grid-cols-3 gap-5 mb-7">
                    <div class="bg-bg-card/40 border border-white/6 rounded-lg p-4">
                        <p class="font-mono text-[0.72rem] text-text-secondary uppercase tracking-[1.5px] mb-2">Problem</p>
                        <p class="text-sm text-text-secondary leading-relaxed">
                            Showing hundreds of product variants and color combinations was slow, expensive, and hard to manage manually.
                        </p>
                    </div>
                    <div class="bg-bg-card/40 border border-white/6 rounded-lg p-4">
                        <p class="font-mono text-[0.72rem] text-text-secondary uppercase tracking-[1.5px] mb-2">What I built</p>
                        <p class="text-sm text-text-secondary leading-relaxed">
                            A Laravel + Filament back office and an automated rendering pipeline that generates product visuals and manages variants.
                        </p>
                    </div>
                    <div class="bg-bg-card/40 border border-white/6 rounded-lg p-4">
                        <p class="font-mono text-[0.72rem] text-text-secondary uppercase tracking-[1.5px] mb-2">Result</p>
                        <p class="text-sm text-text-secondary leading-relaxed">
                            New variants can be prepared in <strong class="text-text-primary font-semibold">hours instead of days</strong>,
                            reducing costs and enabling fast decisions before producing anything.
                        </p>
                    </div>
                </div>

                <p class="text-text-secondary text-base leading-relaxed mb-8">
                    I run this business myself, so the platform is built around real operations: catalog management, inventory, orders, analytics, and fulfillment.
                    The automated pipeline generates Blender renders, then handles conversion (WebP/JPEG), compression, responsive sizing, and metadata —
                    tuned for Core Web Vitals and SEO.
                </p>

                {{-- Key Features --}}
                <div class="grid sm:grid-cols-2 gap-4 mb-8">
                    <div class="bg-bg-card/40 border border-white/6 rounded-lg p-5">
                        <h4 class="text-text-primary font-semibold mb-2">E-Commerce Core</h4>
                        <p class="text-text-secondary text-sm leading-relaxed">Product catalog with attribute-based variant system (size &times; color combinations), dynamic pricing (base + variant addon), and responsive image galleries with 18 conversions per upload.</p>
                    </div>
                    <div class="bg-bg-card/40 border border-white/6 rounded-lg p-5">
                        <h4 class="text-text-primary font-semibold mb-2">Order Management</h4>
                        <p class="text-text-secondary text-sm leading-relaxed">Full order lifecycle (received &rarr; approved &rarr; shipped &rarr; delivered), Stripe Checkout integration with HUF currency, Foxpost/GLS/MPL shipping options, and automatic email notifications at every stage.</p>
                    </div>
                    <div class="bg-bg-card/40 border border-white/6 rounded-lg p-5">
                        <h4 class="text-text-primary font-semibold mb-2">Coupon Engine</h4>
                        <p class="text-text-secondary text-sm leading-relaxed">Fixed and percentage discounts with date-based activation windows, per-customer usage caps, first-order restrictions, and product/category scoping.</p>
                    </div>
                    <div class="bg-bg-card/40 border border-white/6 rounded-lg p-5">
                        <h4 class="text-text-primary font-semibold mb-2">Guest Analytics</h4>
                        <p class="text-text-secondary text-sm leading-relaxed">Session-based visitor tracking, landing page analysis, referrer source detection, search query monitoring, and no-result gap identification &mdash; all without third-party analytics.</p>
                    </div>
                    <div class="bg-bg-card/40 border border-white/6 rounded-lg p-5">
                        <h4 class="text-text-primary font-semibold mb-2">Bilingual Support</h4>
                        <p class="text-text-secondary text-sm leading-relaxed">Full Hungarian + English content (data model, UI, routing). Domain-based locale switching with user preference override.</p>
                    </div>
                </div>

                {{-- By the Numbers --}}
                <div class="grid grid-cols-2 sm:grid-cols-4 gap-3 mb-8">
                    <div class="bg-bg-card/40 border border-white/6 rounded-lg p-4">
                        <span class="block text-accent font-mono text-xl font-bold">30</span>
                        <span class="text-text-secondary text-xs">Dashboard widgets</span>
                    </div>
                    <div class="bg-bg-card/40 border border-white/6 rounded-lg p-4">
                        <span class="block text-accent font-mono text-xl font-bold">8</span>
                        <span class="text-text-secondary text-xs">Filament resources</span>
                    </div>
                    <div class="bg-bg-card/40 border border-white/6 rounded-lg p-4">
                        <span class="block text-accent font-mono text-xl font-bold">24</span>
                        <span class="text-text-secondary text-xs">Livewire components</span>
                    </div>
                    <div class="bg-bg-card/40 border border-white/6 rounded-lg p-4">
                        <span class="block text-accent font-mono text-xl font-bold">14</span>
                        <span class="text-text-secondary text-xs">Eloquent models</span>
                    </div>
                    <div class="bg-bg-card/40 border border-white/6 rounded-lg p-4">
                        <span class="block text-accent font-mono text-xl font-bold">9</span>
                        <span class="text-text-secondary text-xs">Service classes</span>
                    </div>
                    <div class="bg-bg-card/40 border border-white/6 rounded-lg p-4">
                        <span class="block text-accent font-mono text-xl font-bold">9</span>
                        <span class="text-text-secondary text-xs">Authorization policies</span>
                    </div>
                    <div class="bg-bg-card/40 border border-white/6 rounded-lg p-4">
                        <span class="block text-accent font-mono text-xl font-bold">18</span>
                        <span class="text-text-secondary text-xs">Image conversions/upload</span>
                    </div>
                    <div class="bg-bg-card/40 border border-white/6 rounded-lg p-4">
                        <span class="block text-accent font-mono text-xl font-bold">7</span>
                        <span class="text-text-secondary text-xs">Custom middleware</span>
                    </div>
                </div>

                <div class="flex flex-wrap gap-2 mb-6">
                    @foreach (['Laravel', 'FilamentPHP', 'Livewire', 'Tailwind CSS', 'Alpine.js', 'MySQL', 'Python', 'Blender API'] as $tag)
                        <span class="font-mono text-xs px-2.5 py-1 rounded-md bg-accent/10 text-accent border border-accent/15">{{ $tag }}</span>
                    @endforeach
                </div>

                <div class="flex gap-4">
                    <a href="https://nordwoodart.hu" target="_blank" rel="noopener noreferrer" class="font-mono text-sm text-text-secondary underline decoration-text-secondary/30 hover:text-accent hover:decoration-accent transition-colors flex items-center gap-1.5">
                        &nearr; Live site
                    </a>
                    <a href="#demo" class="font-mono text-sm text-text-secondary underline decoration-text-secondary/30 hover:text-accent hover:decoration-accent transition-colors flex items-center gap-1.5">
                        &#9889; Admin panel demo
                    </a>
                </div>
            </div>
        </article>

        {{-- Coming Soon --}}
        <article class="bg-bg-card border border-white/6 border-dashed rounded-xl p-8">
            <p class="font-mono text-xs text-accent-yellow uppercase tracking-[1.5px] mb-2">Coming soon</p>
            <h3 class="text-[1.4rem] font-semibold tracking-tight mb-3">Open Source &amp; GitHub Projects</h3>
            <p class="text-text-secondary text-base leading-relaxed mb-6">
                FilamentPHP packages, Laravel starter kits, and automation utilities I’m preparing for release.
            </p>
            <div class="flex flex-wrap gap-2">
                @foreach (['GitHub', 'Open Source', 'FilamentPHP'] as $tag)
                    <span class="font-mono text-xs px-2.5 py-1 rounded-md bg-accent/10 text-accent border border-accent/15">{{ $tag }}</span>
                @endforeach
            </div>
        </article>
    </div>
</section>
