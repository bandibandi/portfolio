<div id="demo" class="relative bg-bg-card border border-white/6 rounded-xl p-12 max-md:p-8 text-center overflow-hidden max-w-275 mx-auto mb-16 before:content-[''] before:absolute before:top-0 before:left-0 before:right-0 before:h-0.5 before:bg-linear-to-r before:from-transparent before:via-accent before:to-transparent">
    <span class="inline-block font-mono text-[0.7rem] px-4 py-1.5 rounded-full bg-accent-green/10 text-accent-green border border-accent-green/20 tracking-[1px] uppercase mb-6">
        &#9679; Live &amp; Interactive
    </span>
    <h2 class="text-[1.8rem] font-semibold tracking-tight mb-4">Try the Admin Panel</h2>
    <p class="text-text-secondary max-w-125 mx-auto mb-8">
        Explore a real FilamentPHP admin dashboard. Browse products, check analytics, manage orders &mdash; all built by me, running in production.
    </p>

    {{-- Features --}}
    <div class="flex justify-center gap-8 mb-8 flex-wrap">
        @foreach (['Product management', 'Order dashboard', 'Analytics widgets', 'Role-based access'] as $feature)
            <span class="font-mono text-sm text-text-secondary flex items-center gap-1.5">
                <span class="text-accent-green">&#10003;</span> {{ $feature }}
            </span>
        @endforeach
    </div>

    {{-- Credentials --}}
    <div class="inline-block bg-bg-deep border border-white/6 rounded-lg px-6 py-4 font-mono text-sm text-text-secondary text-left mb-8">
        <span class="text-accent">URL:</span> demo.andrashorvath.dev/admin<br>
        <span class="text-accent">Email:</span> demo@andrashorvath.dev<br>
        <span class="text-accent">Pass:</span> &#8226;&#8226;&#8226;&#8226;&#8226;&#8226;&#8226;&#8226;
    </div>

    <br>
    <a
        href="#"
        class="inline-block px-7 py-3 rounded-lg font-medium text-[0.9rem] bg-accent text-bg-deep hover:shadow-[0_0_30px_rgba(122,162,247,0.15)] hover:-translate-y-0.5 transition-all duration-300"
    >
        Launch Admin Demo &rarr;
    </a>
    <p class="text-sm text-text-secondary/50 mt-6">Read-only access &middot; No real customer data &middot; Seeded with sample content</p>
</div>
