<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Andras Horvath — Full-stack Laravel developer specializing in FilamentPHP. Admin panels, web apps, e-commerce. Based in Hungary, working globally.">
    <meta name="author" content="Andras Horvath">
    <meta name="robots" content="index, follow">

    {{-- Open Graph --}}
    <meta property="og:title" content="{{ $title ?? 'andrashorvath.dev — Full-Stack Laravel Developer' }}">
    <meta property="og:description" content="I build admin panels & web apps that run real businesses. Laravel, FilamentPHP, Livewire.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url('/') }}">
    <meta property="og:locale" content="en_US">

    {{-- Twitter Card --}}
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $title ?? 'andrashorvath.dev — Full-Stack Laravel Developer' }}">
    <meta name="twitter:description" content="I build admin panels & web apps that run real businesses. Laravel, FilamentPHP, Livewire.">

    {{-- Canonical --}}
    <link rel="canonical" href="{{ url('/') }}">

    <title>{{ $title ?? 'andrashorvath.dev — Full-Stack Laravel Developer' }}</title>

    {{-- Favicon --}}
    <link rel="icon" href="{{ asset('favicon.svg') }}" type="image/svg+xml">

    {{-- Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@400;500;700&family=Outfit:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles

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
            <p class="text-text-secondary/70 text-[0.75rem] mt-2">
                Hungary &middot; CET (UTC+1) &middot; Available for remote work worldwide
            </p>
        </div>
    </footer>

    @livewireScripts
</body>
</html>
