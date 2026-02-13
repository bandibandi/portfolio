<section id="stack" class="py-24 max-w-275 mx-auto px-4 sm:px-8">
    <p class="font-mono text-sm text-accent uppercase tracking-[2px] mb-3 flex items-center gap-2.5">
        <span class="w-0.5 h-4 bg-accent shrink-0 animate-blink" aria-hidden="true"></span>
        What I work with
    </p>
    <h2 class="text-2xl font-semibold tracking-tight mb-3">Tech Stack</h2>
    <p class="text-text-secondary mb-12">Production-tested tools I use daily to build and ship.</p>

    <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-4">
        @foreach ([
            ['icon' => 'https://cdn.simpleicons.org/laravel/FF2D20', 'name' => 'Laravel', 'desc' => 'Backend foundation. Routing, queues, APIs, auth.'],
            ['icon' => 'https://raw.githubusercontent.com/filamentphp/filament/3.x/docs-assets/images/icon.png', 'name' => 'FilamentPHP', 'desc' => 'Admin panels, dashboards, roles & permissions.'],
            ['icon' => 'https://cdn.simpleicons.org/livewire/FB70A9', 'name' => 'Livewire', 'desc' => 'Reactive UI, real-time components.'],
            ['icon' => 'https://cdn.simpleicons.org/alpinedotjs/8BC0D0', 'name' => 'Alpine.js', 'desc' => 'Lightweight interactivity. Dropdowns, modals, toggles.'],
            ['icon' => 'https://cdn.simpleicons.org/tailwindcss/06B6D4', 'name' => 'Tailwind CSS', 'desc' => 'Utility-first styling. Consistent, responsive design.'],
            ['icon' => 'https://cdn.simpleicons.org/mysql/4479A1', 'name' => 'MySQL', 'desc' => 'Database design, optimization, migrations.'],
            ['icon' => 'https://cdn.simpleicons.org/python/3776AB', 'name' => 'Python', 'desc' => 'Automation, image processing, Blender scripting.'],
            ['icon' => 'https://cdn.simpleicons.org/linux/FCC624', 'name' => 'Linux', 'desc' => 'Server setup, deployment, Docker, SSH, cron.'],
        ] as $tech)
            <div class="bg-bg-card border border-white/6 rounded-xl p-6 hover:bg-bg-card-hover hover:border-accent/20 hover:-translate-y-0.5 transition-all duration-300">
                <div class="mb-3">
                    <img src="{{ $tech['icon'] }}" alt="{{ $tech['name'] }}" width="36" height="36" class="w-9 h-9 {{ $tech['name'] === 'FilamentPHP' ? 'rounded' : '' }}" loading="lazy">
                </div>
                <h3 class="text-base font-semibold mb-1">{{ $tech['name'] }}</h3>
                <p class="text-sm text-text-secondary leading-snug">{{ $tech['desc'] }}</p>
            </div>
        @endforeach
    </div>
</section>
