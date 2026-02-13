<section id="services" class="py-24 max-w-275 mx-auto px-4 sm:px-8">
    <p class="font-mono text-sm text-accent uppercase tracking-[2px] mb-3 flex items-center gap-2.5">
        <span class="w-0.5 h-4 bg-accent shrink-0 animate-blink" aria-hidden="true"></span>
        What I can build for you
    </p>
    <h2 class="text-2xl font-semibold tracking-tight mb-3">Services</h2>
    <p class="text-text-secondary mb-12">
        I design systems that replace manual processes, centralize operations, and give businesses reliable internal tools.
    </p>

    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach ([
            [
                'title' => 'Custom Admin Systems',
                'description' => 'Production-grade admin panels with role control, structured workflows, and dashboards teams actually rely on every day.',
            ],
            [
                'title' => 'Internal Business Tools',
                'description' => 'Custom CRM, logistics, and operations software built around how your company really works — not generic templates.',
            ],
            [
                'title' => 'E-Commerce Infrastructure',
                'description' => 'Stores and product systems designed for scale: inventory, automation, and backend operations that stay manageable.',
            ],
            [
                'title' => 'API & System Integration',
                'description' => 'Reliable APIs and integrations that connect services, automate data flow, and remove manual handoffs.',
            ],
            [
                'title' => 'Legacy System Upgrades',
                'description' => 'Modernizing aging PHP systems into maintainable Laravel architecture without disrupting operations.',
            ],
            [
                'title' => 'Automation Pipelines',
                'description' => 'Custom automation for data processing, batch operations, and repeatable workflows that save hours every week.',
            ],
        ] as $service)
            <div class="relative bg-bg-card border border-white/6 rounded-xl p-8 hover:bg-bg-card-hover hover:border-accent/20 hover:-translate-y-0.5 transition-all duration-300 overflow-hidden before:content-[''] before:absolute before:top-0 before:left-0 before:right-0 before:h-0.5 before:bg-accent before:opacity-0 hover:before:opacity-100 before:transition-opacity before:duration-300">
                <h3 class="text-[1.1rem] font-semibold mb-3">{{ $service['title'] }}</h3>
                <p class="text-base text-text-secondary leading-relaxed">{{ $service['description'] }}</p>
            </div>
        @endforeach
    </div>

    {{-- Business impact --}}
    <div class="mt-16 border border-white/6 rounded-xl p-10 bg-bg-card/40">
        <h3 class="text-xl font-semibold mb-6">Real business impact</h3>

        <ul class="grid sm:grid-cols-2 gap-x-10 gap-y-4 text-text-secondary text-base leading-relaxed">
            <li>• Reduce manual work equal to 2 full-time employees</li>
            <li>• Replace spreadsheet chaos with structured systems</li>
            <li>• Automate repetitive admin tasks</li>
            <li>• Speed up internal workflows</li>
            <li>• Eliminate human error in daily operations</li>
            <li>• Turn messy processes into scalable pipelines</li>
            <li>• Centralize data into one reliable system</li>
            <li>• Know your company’s key numbers at any moment</li>
        </ul>
    </div>
</section>
