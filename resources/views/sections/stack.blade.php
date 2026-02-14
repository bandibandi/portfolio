<section id="stack" class="py-24 max-w-275 mx-auto px-4 sm:px-8">
    <p class="font-mono text-sm text-accent uppercase tracking-[2px] mb-3 flex items-center gap-2.5">
        <span class="w-0.5 h-4 bg-accent shrink-0 animate-blink" aria-hidden="true"></span>
        What I work with
    </p>

    <h2 class="text-2xl font-semibold tracking-tight mb-3">Tech Stack</h2>
    <p class="text-text-secondary mb-12">Production-tested tools I use daily to build and ship.</p>

    <div class="grid md:grid-cols-2 gap-6">

        {{-- Core & Admin --}}
        <div class="bg-bg-card border border-white/6 rounded-xl p-8 hover:border-accent/20 transition-colors duration-300">
            <h3 class="text-base font-semibold tracking-wide mb-1">Core & Admin</h3>
            <p class="text-sm text-text-secondary mb-6">Backend foundation, data layer, and operational control.</p>

            <div class="space-y-4">
                @foreach ([
                    ['icon' => '/images/filament-icon.png', 'name' => 'FilamentPHP', 'desc' => 'Admin panels, dashboards, roles & permissions.', 'rounded' => true],
                    ['icon' => '/images/icon-laravel.svg', 'name' => 'Laravel', 'desc' => 'Routing, queues, APIs, auth, Eloquent ORM.'],
                    ['icon' => '/images/icon-mysql.svg', 'name' => 'MySQL', 'desc' => 'Schema design, migrations, query tuning.'],
                ] as $tech)
                    <div class="flex gap-3">
                        <img
                            src="{{ $tech['icon'] }}"
                            alt="{{ $tech['name'] }}"
                            width="28"
                            height="28"
                            class="w-7 h-7 mt-0.5 {{ !empty($tech['rounded']) ? 'rounded' : '' }}"
                            loading="lazy"
                        >
                        <div>
                            <div class="text-sm font-semibold leading-tight">{{ $tech['name'] }}</div>
                            <div class="text-xs text-text-secondary leading-snug">{{ $tech['desc'] }}</div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        {{-- App UI --}}
        <div class="bg-bg-card border border-white/6 rounded-xl p-8 hover:border-accent/20 transition-colors duration-300">
            <h3 class="text-base font-semibold tracking-wide mb-1">App UI</h3>
            <p class="text-sm text-text-secondary mb-6">Reactive front-end and design system.</p>

            <div class="space-y-4">
                @foreach ([
                    ['icon' => '/images/icon-livewire.svg', 'name' => 'Livewire', 'desc' => 'Server-driven UI, no JS needed.'],
                    ['icon' => '/images/icon-alpinejs.svg', 'name' => 'Alpine.js', 'desc' => 'Dropdowns, modals, transitions.'],
                    ['icon' => '/images/icon-tailwindcss.svg', 'name' => 'Tailwind CSS', 'desc' => 'Utility-first design system.'],
                ] as $tech)
                    <div class="flex gap-3">
                        <img
                            src="{{ $tech['icon'] }}"
                            alt="{{ $tech['name'] }}"
                            width="28"
                            height="28"
                            class="w-7 h-7 mt-0.5"
                            loading="lazy"
                        >
                        <div>
                            <div class="text-sm font-semibold leading-tight">{{ $tech['name'] }}</div>
                            <div class="text-xs text-text-secondary leading-snug">{{ $tech['desc'] }}</div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        {{-- Infrastructure --}}
        <div class="bg-bg-card border border-white/6 rounded-xl p-8 hover:border-accent/20 transition-colors duration-300">
            <h3 class="text-base font-semibold tracking-wide mb-1">Infrastructure</h3>
            <p class="text-sm text-text-secondary mb-6">Deployment, edge layer, and stability.</p>

            <div class="space-y-4">
                @foreach ([
                    ['icon' => '/images/icon-linux.svg', 'name' => 'Linux', 'desc' => 'VPS, SSH, cron, service management.'],
                    ['icon' => '/images/icon-cloudflare.svg', 'name' => 'Cloudflare', 'desc' => 'Edge caching, DNS, SSL, DDoS protection.'],
                ] as $tech)
                    <div class="flex gap-3">
                        <img
                            src="{{ $tech['icon'] }}"
                            alt="{{ $tech['name'] }}"
                            width="28"
                            height="28"
                            class="w-7 h-7 mt-0.5"
                            loading="lazy"
                        >
                        <div>
                            <div class="text-sm font-semibold leading-tight">{{ $tech['name'] }}</div>
                            <div class="text-xs text-text-secondary leading-snug">{{ $tech['desc'] }}</div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        {{-- Automation --}}
        <div class="bg-bg-card border border-white/6 rounded-xl p-8 hover:border-accent/20 transition-colors duration-300">
            <h3 class="text-base font-semibold tracking-wide mb-1">Automation</h3>
            <p class="text-sm text-text-secondary mb-6">Scripting, batch jobs, and deploy tooling.</p>

            <div class="space-y-4">
                @foreach ([
                    ['icon' => '/images/icon-python.svg', 'name' => 'Python', 'desc' => 'Data pipelines, image generation, APIs.'],
                    ['icon' => '/images/icon-bash.svg', 'name' => 'Bash', 'desc' => 'Deploy scripts, git hooks, cache ops.'],
                ] as $tech)
                    <div class="flex gap-3">
                        <img
                            src="{{ $tech['icon'] }}"
                            alt="{{ $tech['name'] }}"
                            width="28"
                            height="28"
                            class="w-7 h-7 mt-0.5"
                            loading="lazy"
                        >
                        <div>
                            <div class="text-sm font-semibold leading-tight">{{ $tech['name'] }}</div>
                            <div class="text-xs text-text-secondary leading-snug">{{ $tech['desc'] }}</div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

    </div>
</section>
