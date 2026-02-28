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
    <div class="mb-10 border border-white/6 rounded-lg bg-bg-deep">
        <video class="w-full rounded-lg" controls autoplay muted loop playsinline preload="metadata">
            <source src="/videos/demo-preview.mp4" type="video/mp4">
        </video>
    </div>

    {{-- Feature Overview (demo-relevant) --}}
    <h3 class="font-mono text-xs uppercase tracking-[2px] text-text-secondary mb-8">Feature Overview</h3>

    <div class="grid sm:grid-cols-2 gap-4 mb-10 text-left">
        <div class="bg-bg-deep border border-white/6 rounded-lg p-5">
            <h4 class="text-text-primary font-semibold mb-2">Admin Dashboard</h4>
            <p class="text-text-secondary text-sm leading-relaxed">30 analytics widgets across 5 dashboard pages &mdash; revenue trends, order status distribution, geographic heatmaps, inventory monitoring, search analytics, and guest traffic analysis. All queries run on live data without caching shortcuts.</p>
        </div>
        <div class="bg-bg-deep border border-white/6 rounded-lg p-5">
            <h4 class="text-text-primary font-semibold mb-2">Product Architecture</h4>
            <p class="text-text-secondary text-sm leading-relaxed">Attribute-driven variant generation, per-color featured images and galleries, composite pricing, stock tracking per variant, bilingual SEO metadata, and Spatie Media Library with watermarking and 9 responsive sizes in JPG + WebP.</p>
        </div>
        <div class="bg-bg-deep border border-white/6 rounded-lg p-5">
            <h4 class="text-text-primary font-semibold mb-2">Demo Mode</h4>
            <p class="text-text-secondary text-sm leading-relaxed">Same production codebase &mdash; demo behavior is config-driven. Cloudflare Turnstile auto-login, policy-level write protection, automated data resets, payment blocking, and SEO exclusion. 55+ safeguard checks across the stack.</p>
        </div>
    </div>

    {{-- Disabled in Demo --}}
    <h3 class="font-mono text-xs uppercase tracking-[2px] text-text-secondary mb-3">Disabled in Demo</h3>
    <p class="text-text-secondary text-sm mb-6 max-w-175 mx-auto">The demo runs the same codebase as production. The following features are active in production but disabled in the demo environment via configuration:</p>

    <div class="grid sm:grid-cols-2 gap-x-10 gap-y-2 mb-10 text-text-secondary text-sm text-left max-w-175 mx-auto">
        <span class="flex items-start gap-2"><span class="text-accent-red mt-0.5">&#10005;</span> <span><strong class="text-text-primary">Stripe payments</strong> &mdash; checkout flow blocked at service layer</span></span>
        <span class="flex items-start gap-2"><span class="text-accent-red mt-0.5">&#10005;</span> <span><strong class="text-text-primary">Checkout page</strong> &mdash; entire checkout component disabled</span></span>
        <span class="flex items-start gap-2"><span class="text-accent-red mt-0.5">&#10005;</span> <span><strong class="text-text-primary">Email notifications</strong> &mdash; redirected to log driver</span></span>
        <span class="flex items-start gap-2"><span class="text-accent-red mt-0.5">&#10005;</span> <span><strong class="text-text-primary">File uploads</strong> &mdash; disabled across all forms</span></span>
        <span class="flex items-start gap-2"><span class="text-accent-red mt-0.5">&#10005;</span> <span><strong class="text-text-primary">Record deletion</strong> &mdash; blocked at policy level via shared trait</span></span>
        <span class="flex items-start gap-2"><span class="text-accent-red mt-0.5">&#10005;</span> <span><strong class="text-text-primary">Storefront writes</strong> &mdash; POST/PUT/DELETE blocked on public routes</span></span>
        <span class="flex items-start gap-2"><span class="text-accent-red mt-0.5">&#10005;</span> <span><strong class="text-text-primary">Settings modification</strong> &mdash; returns warning instead</span></span>
        <span class="flex items-start gap-2"><span class="text-accent-red mt-0.5">&#10005;</span> <span><strong class="text-text-primary">AI description generator</strong> &mdash; buttons disabled</span></span>
        <span class="flex items-start gap-2"><span class="text-accent-red mt-0.5">&#10005;</span> <span><strong class="text-text-primary">SEO indexing</strong> &mdash; robots meta prevents crawling</span></span>
        <span class="flex items-start gap-2"><span class="text-accent-red mt-0.5">&#10005;</span> <span><strong class="text-text-primary">Webhook endpoints</strong> &mdash; Stripe route not registered</span></span>
    </div>

    {{-- Architecture Highlights --}}
    <h3 class="font-mono text-xs uppercase tracking-[2px] text-text-secondary mb-6">Technical Showcase</h3>

    <div class="grid sm:grid-cols-2 gap-4 mb-10 text-left">
        <div class="bg-bg-deep border border-white/6 rounded-lg p-5">
            <h4 class="text-text-primary font-semibold mb-2">Query Optimization</h4>
            <p class="text-text-secondary text-sm leading-relaxed">Aggregated queries using GROUP BY with conditional aggregation (SUM/COUNT CASE WHEN), composite indexes, eager loading &mdash; zero N+1 problems under 90K+ orders.</p>
        </div>
        <div class="bg-bg-deep border border-white/6 rounded-lg p-5">
            <h4 class="text-text-primary font-semibold mb-2">Hybrid Cart System</h4>
            <p class="text-text-secondary text-sm leading-relaxed">Session-based storage for guests, database for authenticated users. Auto-migration on login/logout with request-level caching.</p>
        </div>
        <div class="bg-bg-deep border border-white/6 rounded-lg p-5">
            <h4 class="text-text-primary font-semibold mb-2">Demo Mode Architecture</h4>
            <p class="text-text-secondary text-sm leading-relaxed">Production codebase with config-driven restrictions enforced at three layers: middleware (request blocking), policies (authorization), and services (payment/upload blocking).</p>
        </div>
        <div class="bg-bg-deep border border-white/6 rounded-lg p-5">
            <h4 class="text-text-primary font-semibold mb-2">Dual Image Pipeline</h4>
            <p class="text-text-secondary text-sm leading-relaxed">Iteratively developed from manual GUI workflow through bash automation to the current Python pipeline. Production images processed with pyvips (Lanczos3 resampling), PNG watermark compositing, and exiftool for IPTC/XMP metadata &mdash; 7 sizes &times; 2 formats per source. GD-based on-upload conversions serve as dev fallback.</p>
        </div>
        <div class="bg-bg-deep border border-white/6 rounded-lg p-5">
            <h4 class="text-text-primary font-semibold mb-2">Payment Integration</h4>
            <p class="text-text-secondary text-sm leading-relaxed">Stripe Checkout with HUF fill&eacute;r conversion, session lifecycle management, webhook handling, and demo-safe blocking via service layer.</p>
        </div>
        <div class="bg-bg-deep border border-white/6 rounded-lg p-5">
            <h4 class="text-text-primary font-semibold mb-2">Bilingual Architecture</h4>
            <p class="text-text-secondary text-sm leading-relaxed">9 notifications + 7 mail classes across 2 languages. Domain-based locale switching with user preference override throughout the entire stack.</p>
        </div>
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
