<nav
    x-data="{ open: false, scrolled: false }"
    x-on:scroll.window="scrolled = window.scrollY > 50"
    :class="scrolled ? 'shadow-lg' : ''"
    class="fixed top-0 left-0 right-0 z-50 bg-bg-deep/85 backdrop-blur-xl border-b border-white/6 transition-all duration-300"
    role="navigation"
    aria-label="Main navigation"
>
    <div class="max-w-275 mx-auto px-4 sm:px-8">
        <div class="flex items-center justify-between h-16">
            {{-- Logo --}}
            <a href="#" class="font-mono text-accent font-medium text-lg" aria-label="Home">
                andrashorvath<span class="text-text-secondary">.dev</span>
            </a>

            {{-- Desktop Nav --}}
            <div class="hidden md:flex items-center gap-8">
                @foreach ($navItems as $item)
                    <a
                        href="#{{ $item['id'] }}"
                        class="text-text-secondary hover:text-accent transition-colors text-[0.85rem] uppercase tracking-[0.5px]"
                    >
                        {{ $item['label'] }}
                    </a>
                @endforeach
            </div>

            {{-- Mobile Menu Button --}}
            <button
                x-on:click="open = !open"
                class="md:hidden text-text-secondary hover:text-accent transition-colors"
                :aria-expanded="open.toString()"
                aria-controls="mobile-menu"
                aria-label="Toggle menu"
            >
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path
                        x-show="!open"
                        stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M4 6h16M4 12h16M4 18h16"
                    />
                    <path
                        x-show="open" x-cloak
                        stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M6 18L18 6M6 6l12 12"
                    />
                </svg>
            </button>
        </div>
    </div>

    {{-- Mobile Menu --}}
    <div
        id="mobile-menu"
        x-show="open"
        x-cloak
        x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0 -translate-y-2"
        x-transition:enter-end="opacity-100 translate-y-0"
        x-transition:leave="transition ease-in duration-150"
        x-transition:leave-start="opacity-100 translate-y-0"
        x-transition:leave-end="opacity-0 -translate-y-2"
        class="md:hidden bg-bg-deep/95 backdrop-blur-xl border-b border-white/6"
    >
        <div class="px-4 py-4 space-y-3">
            @foreach ($navItems as $item)
                <a
                    href="#{{ $item['id'] }}"
                    x-on:click="open = false"
                    class="block text-text-secondary hover:text-accent transition-colors text-sm uppercase tracking-[0.5px]"
                >
                    {{ $item['label'] }}
                </a>
            @endforeach
        </div>
    </div>
</nav>
