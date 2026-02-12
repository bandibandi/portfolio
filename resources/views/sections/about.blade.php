<section id="about" class="py-24 max-w-275 mx-auto px-4 sm:px-8">
    <p class="font-mono text-sm text-accent uppercase tracking-[2px] mb-3 flex items-center gap-2.5">
        <span class="w-0.5 h-4 bg-accent shrink-0 animate-blink" aria-hidden="true"></span>
        Who I am
    </p>
    <h2 class="text-2xl font-semibold tracking-tight mb-3">About</h2>

    <div class="mt-12">
        {{-- Photo --}}
        <img
            src="{{ asset('images/photo.jpg') }}"
            alt="Andras Horvath"
            class="float-left w-64 h-64 rounded-xl object-cover border border-white/6 mr-10 mb-6 max-md:float-none max-md:block max-md:mx-auto max-md:mr-auto max-md:w-52 max-md:h-52 max-md:mb-8"
            loading="lazy"
        >

        {{-- Bio --}}
        <p class="text-text-secondary leading-relaxed mb-4">
            I'm Andras, a full-stack developer from Hungary with 15+ years in IT. I spent years as a sysadmin at a multinational energy company (VINCI Energies), managing infrastructure across multiple sites, before moving into full-time software development.
        </p>
        <p class="text-text-secondary leading-relaxed mb-4">
            Over the years I've built a wide range of systems: a CRM for Hungary's leading cash register provider, IoT loyalty terminals on Raspberry Pi, industrial safety documentation software for companies like MOL and Egis, and a central government system for development policy, managing EU and national funding programs.
        </p>
        <p class="text-text-secondary leading-relaxed mb-4">
            Today my focus is the Laravel ecosystem, with deep expertise in FilamentPHP for admin panels and dashboards. I handle everything end-to-end: backend logic, frontend UI, database design, server deployment, and ongoing maintenance.
        </p>
        <p class="text-text-secondary leading-relaxed mb-6">
            I also run my own e-commerce business selling laser-cut wooden wall art &mdash; built entirely on my own stack, with automated Blender 3D rendering and image processing pipelines. That means I understand both the developer's and the business owner's perspective.
        </p>

        {{-- Quick facts --}}
        <div class="clear-left grid grid-cols-2 gap-3">
            @foreach ([
                'Based in Hungary (CET)',
                'English & Hungarian',
                '15+ years in IT',
                'CS degree (BSc)',
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
</section>
