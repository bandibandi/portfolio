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
        <p class="text-lg text-text-secondary leading-relaxed mb-6">
            I’ve been working in IT for over 15 years, starting on the infrastructure side before moving fully into software engineering.
            Early in my career I managed enterprise infrastructure across multiple sites in a large multinational environment, where stability, documentation, and operational discipline were essential.
        </p>

        <p class="text-lg text-text-secondary leading-relaxed mb-6">
            That background still shapes how I build software today. I focus on systems that remain maintainable under pressure
            and understandable months or years later.
        </p>

        <p class="text-lg text-text-secondary leading-relaxed mb-6">
            Over the years I’ve worked on CRM platforms, industrial safety software, IoT hardware integrations,
            and public-sector systems handling large-scale operational workflows. These environments required precision,
            auditability, and long-term reliability.
        </p>

        <p class="text-lg text-text-secondary leading-relaxed mb-8">
            Running my own e-commerce business adds another layer: I build and operate the same kind of systems I deliver to clients.
            Every automation, pipeline, and dashboard I create is grounded in real business constraints —
            time, cost, and repeatability.
        </p>

        {{-- Quick facts --}}
        <div class="clear-left grid grid-cols-2 gap-3">
            @foreach ([
                '15+ years in IT',
                'BSc in Computer Science',
                'Laravel • Filament • TALL stack',
                'English & Hungarian',
                'Available 20–40 hrs/week',
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
