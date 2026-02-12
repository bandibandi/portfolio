<section id="services" class="py-24 max-w-275 mx-auto px-4 sm:px-8">
    <p class="font-mono text-sm text-accent uppercase tracking-[2px] mb-3 flex items-center gap-2.5">
        <span class="w-0.5 h-4 bg-accent shrink-0 animate-blink" aria-hidden="true"></span>
        What I can build for you
    </p>
    <h2 class="text-2xl font-semibold tracking-tight mb-3">Services</h2>
    <p class="text-text-secondary mb-12">I turn business requirements into working software. Here's what I do best.</p>

    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach ([
            [
                'title' => 'Custom Admin Panels',
                'description' => 'FilamentPHP dashboards with role-based access, custom widgets, data tables, charts, and CRUD interfaces.',
            ],
            [
                'title' => 'E-Commerce Platforms',
                'description' => 'Full-featured online stores with product management, inventory tracking, payment integration, and automated workflows.',
            ],
            [
                'title' => 'CRM & Business Tools',
                'description' => 'Lead management, customer tracking, automated notifications, internal dashboards. Custom-built to fit your exact workflow.',
            ],
            [
                'title' => 'API Development',
                'description' => 'RESTful APIs, third-party integrations, webhook handlers, and data pipelines. Clean, documented, and built for reliability.',
            ],
            [
                'title' => 'Legacy PHP Modernization',
                'description' => 'Refactoring old PHP codebases to modern Laravel architecture. Database migration, API-first redesign.',
            ],
            [
                'title' => 'Automation & Scripting',
                'description' => 'Python and PHP automation for image processing, batch operations, data import/export, and custom workflow pipelines.',
            ],
        ] as $service)
            <div class="relative bg-bg-card border border-white/6 rounded-xl p-8 hover:bg-bg-card-hover hover:border-accent/20 hover:-translate-y-0.5 transition-all duration-300 overflow-hidden before:content-[''] before:absolute before:top-0 before:left-0 before:right-0 before:h-0.5 before:bg-accent before:opacity-0 hover:before:opacity-100 before:transition-opacity before:duration-300">
                <h4 class="text-[1.1rem] font-semibold mb-3">{{ $service['title'] }}</h4>
                <p class="text-base text-text-secondary leading-relaxed">{{ $service['description'] }}</p>
            </div>
        @endforeach
    </div>
</section>
