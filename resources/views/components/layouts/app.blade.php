<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="I design and build custom admin systems, internal tools, and automation platforms for businesses that outgrow spreadsheets.">
    <meta name="author" content="Andras Horvath">
    <meta name="robots" content="index, follow">

    {{-- Open Graph --}}
    <meta property="og:title" content="{{ $title ?? 'andrashorvath.dev — Full-Stack Laravel Developer' }}">
    <meta property="og:description" content="I design and build custom admin systems, internal tools, and automation platforms for businesses that outgrow spreadsheets.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url('/') }}">
    <meta property="og:locale" content="en_US">

    <meta property="og:image" content="{{ asset('images/og-image.jpg') }}">

    {{-- Twitter Card --}}
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $title ?? 'andrashorvath.dev — Full-Stack Laravel Developer' }}">
    <meta name="twitter:description" content="I design and build custom admin systems, internal tools, and automation platforms for businesses that outgrow spreadsheets.">
    <meta name="twitter:image" content="{{ asset('images/og-image.jpg') }}">

    {{-- Canonical --}}
    <link rel="canonical" href="{{ url('/') }}">

    <title>{{ $title ?? 'andrashorvath.dev — Full-Stack Laravel Developer' }}</title>

    {{-- Favicon --}}
    <link rel="icon" href="{{ asset('favicon.svg') }}" type="image/svg+xml">

    {{-- Preload LCP-critical font (self-hosted, eliminates third-party chain) --}}
    <link rel="preload" href="/fonts/outfit-latin.woff2" as="font" type="font/woff2" crossorigin>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles

    {{-- Structured Data --}}
    <script type="application/ld+json">{!! json_encode([
        '@context' => 'https://schema.org',
        '@type' => 'ProfessionalService',
        'name' => 'Andras Horvath — Full-Stack Laravel Developer',
        'url' => url('/'),
        'logo' => asset('favicon.svg'),
        'description' => 'I design and build custom admin systems, internal tools, and automation platforms for businesses that outgrow spreadsheets.',
        'address' => ['@type' => 'PostalAddress', 'addressCountry' => 'HU'],
        'founder' => [
            '@type' => 'Person',
            'name' => 'Andras Horvath',
            'jobTitle' => 'Full-Stack Laravel Developer',
            'url' => url('/'),
        ],
        'knowsAbout' => ['Laravel', 'FilamentPHP', 'Livewire', 'Tailwind CSS', 'PHP', 'MySQL', 'Alpine.js'],
        'areaServed' => 'Worldwide',
    ], JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) !!}</script>

    {{-- Cloudflare Turnstile --}}
    @if (config('services.turnstile.site_key'))
        <script src="https://challenges.cloudflare.com/turnstile/v0/api.js?render=explicit" async defer></script>
    @endif
</head>
<body class="bg-bg-deep text-text-primary font-sans antialiased">

    {{-- Skip to content (accessibility) --}}
    <a href="#hero" class="sr-only focus:not-sr-only focus:fixed focus:top-4 focus:left-4 focus:z-100 focus:px-4 focus:py-2 focus:bg-accent focus:text-bg-deep focus:rounded-lg focus:font-medium focus:text-sm">
        Skip to content
    </a>

    {{-- Navigation --}}
    <x-nav />

    {{-- Main Content --}}
    <main>
        {{ $slot }}
    </main>

    {{-- Footer --}}
    <footer class="border-t border-border py-8 text-center font-mono text-[0.8rem] text-text-secondary" role="contentinfo">
        <div class="max-w-275 mx-auto px-4 sm:px-8">
            <p>&copy; {{ date('Y') }} Andras Horvath &mdash; Built with Laravel, Tailwind CSS &amp; &#9749;</p>
            <p class="text-text-secondary text-[0.75rem] mt-2">
                Hungary &middot; CET (UTC+1) &middot; Available for remote work worldwide
            </p>
        </div>
    </footer>

    @livewireScripts
    <script>
    (function () {
        const slot = document.getElementById('contact-form-slot');
        if (!slot) return;

        const load = async () => {
        const res = await fetch('/contact-fragment', {
            headers: { 'X-Requested-With': 'XMLHttpRequest' }
        });
        const token = res.headers.get('X-CSRF-TOKEN');
        const html = await res.text();

        // Pass the CSRF token to Livewire before injecting the component
        if (token) {
            const el = document.querySelector('[data-csrf]');
            if (el) el.setAttribute('data-csrf', token);
        }

        slot.innerHTML = html;
        };

        // lazy: when near viewport
        const obs = new IntersectionObserver((entries) => {
        if (!entries[0].isIntersecting) return;
        obs.disconnect();
        load();
        }, { rootMargin: '400px' });

        obs.observe(slot);
    })();
    </script>    
</body>
</html>
