<div id="demo" x-data class="relative bg-bg-card border border-white/6 rounded-xl p-12 max-md:p-8 text-center overflow-hidden max-w-275 mx-auto mb-16 before:content-[''] before:absolute before:top-0 before:left-0 before:right-0 before:h-0.5 before:bg-linear-to-r before:from-transparent before:via-accent before:to-transparent">

    <span class="inline-block font-mono text-xs px-4 py-1.5 rounded-full bg-accent-green/10 text-accent-green border border-accent-green/20 tracking-[1px] uppercase mb-6">
        &#9679; Live & Interactive
    </span>

    <h2 class="text-[1.8rem] font-semibold tracking-tight mb-4">Try the Admin Panel</h2>

    <p class="text-text-secondary max-w-125 mx-auto mb-8">
        Explore a real production-style FilamentPHP admin dashboard.
        A working system you can click through and inspect.
    </p>

    {{-- Demo preview video --}}
    <div class="mb-10 border border-white/6 rounded-lg overflow-hidden bg-bg-deep">
        <video class="w-full rounded-lg" controls autoplay muted loop playsinline preload="metadata">
            <source src="/videos/demo-preview.mp4" type="video/mp4">
        </video>
    </div>

    {{-- What's inside --}}
    <h3 class="font-mono text-xs uppercase tracking-[2px] text-text-secondary mb-5">What's inside</h3>

    <div class="grid sm:grid-cols-2 gap-x-10 gap-y-3 mb-10 text-text-secondary text-base">
        <span class="flex items-center gap-2"><span class="text-accent-green">&#10003;</span> Product management system</span>
        <span class="flex items-center gap-2"><span class="text-accent-green">&#10003;</span> Variant generator</span>
        <span class="flex items-center gap-2"><span class="text-accent-green">&#10003;</span> Order workflow simulation</span>
        <span class="flex items-center gap-2"><span class="text-accent-green">&#10003;</span> Admin dashboard analytics</span>
        <span class="flex items-center gap-2"><span class="text-accent-green">&#10003;</span> Role-based permissions</span>
        <span class="flex items-center gap-2"><span class="text-accent-green">&#10003;</span> Automation tools</span>
    </div>

    {{-- One-click login --}}
    <a href="https://demo.andrashorvath.dev/demo-login" target="_blank" rel="noopener"
       class="inline-block px-7 py-3 rounded-lg font-medium text-base bg-accent text-bg-deep hover:bg-accent-light transition-colors mb-6">
        Login as Demo User &rarr;
    </a>

    {{-- Manual credentials fallback --}}
    <p class="text-xs text-text-secondary uppercase tracking-[1.5px] font-mono mb-3">Or log in manually</p>

    <div class="inline-flex flex-col gap-3 bg-bg-deep border border-white/6 rounded-lg px-6 py-5 font-mono text-sm text-left mb-8">
        <div class="flex items-center justify-between gap-6">
            <span><span class="text-accent">Email:</span> <span class="text-text-primary">demo@andrashorvath.dev</span></span>
            <button
                x-on:click="navigator.clipboard.writeText('demo@andrashorvath.dev'); $el.textContent = 'Copied!'; setTimeout(() => $el.textContent = 'Copy', 1500)"
                class="text-xs text-accent hover:text-accent-light transition-colors cursor-pointer"
            >Copy</button>
        </div>
        <div class="flex items-center justify-between gap-6">
            <span><span class="text-accent">Pass:</span> <span class="text-text-primary">NordWood@Demo2026</span></span>
            <button
                x-on:click="navigator.clipboard.writeText('NordWood@Demo2026'); $el.textContent = 'Copied!'; setTimeout(() => $el.textContent = 'Copy', 1500)"
                class="text-xs text-accent hover:text-accent-light transition-colors cursor-pointer"
            >Copy</button>
        </div>
    </div>

    <p class="text-sm text-text-secondary mt-6">
        Shared public demo · No real customer data · Data resets daily
    </p>
</div>
