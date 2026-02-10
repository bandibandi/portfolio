<section id="about" class="py-24 max-w-275 mx-auto px-4 sm:px-8">
    <p class="font-mono text-sm text-accent uppercase tracking-[2px] mb-3 flex items-center gap-2.5">
        <span class="w-0.5 h-4 bg-accent shrink-0 animate-blink" aria-hidden="true"></span>
        Who I am
    </p>
    <h2 class="text-2xl font-semibold tracking-tight mb-3">About</h2>

    <div class="grid md:grid-cols-[auto_1fr] gap-12 items-start mt-12">
        {{-- Photo placeholder --}}
        <div class="w-70 h-80 rounded-xl bg-bg-card border border-white/6 flex items-center justify-center text-text-secondary font-mono text-[0.85rem] flex-col gap-2 max-md:mx-auto max-md:w-50 max-md:h-60">
            <span>[ Photo ]</span>
        </div>

        {{-- Bio --}}
        <div>
            <p class="text-text-secondary leading-relaxed mb-4">
                I'm Andras, a solo full-stack developer from Hungary. I build and maintain web applications that serve real customers and generate real revenue &mdash; not just portfolio pieces.
            </p>
            <p class="text-text-secondary leading-relaxed mb-4">
                My main focus is the Laravel ecosystem, with deep expertise in FilamentPHP for admin panels and dashboards. I handle everything: backend logic, frontend UI, database design, server deployment, and ongoing maintenance.
            </p>
            <p class="text-text-secondary leading-relaxed mb-6">
                When I'm not coding, I run my own e-commerce business selling handcrafted wooden art &mdash; built entirely on my own stack. That means I understand both the developer's and the business owner's perspective.
            </p>

            {{-- Quick facts --}}
            <div class="grid grid-cols-2 gap-3">
                @foreach ([
                    'Based in Hungary (CET)',
                    'English & Hungarian',
                    'Available 20-40 hrs/week',
                    'Remote & async-friendly',
                ] as $fact)
                    <div class="font-mono text-sm text-text-secondary flex items-center gap-2">
                        <span class="w-1.5 h-1.5 rounded-full bg-accent shrink-0"></span>
                        {{ $fact }}
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
