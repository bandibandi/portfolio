<x-layouts.app :title="'Blog | andrashorvath.dev'">
    <section class="pt-32 pb-24 max-w-275 mx-auto px-4 sm:px-8">
        <div class="reveal">
            <p class="font-mono text-sm text-accent uppercase tracking-[2px] mb-3 flex items-center gap-2.5">
                <span class="w-0.5 h-4 bg-accent shrink-0 animate-blink" aria-hidden="true"></span>
                Writing
            </p>
            <h1 class="text-2xl font-semibold tracking-tight mb-3">Blog</h1>
            <p class="text-text-secondary mb-12">Notes on Laravel, FilamentPHP, and building production systems.</p>
        </div>

        @if ($posts->isEmpty())
            <div class="reveal bg-bg-card border border-white/6 border-dashed rounded-xl p-12 text-center">
                <p class="text-text-secondary">No posts yet. Check back soon.</p>
            </div>
        @else
            <div class="space-y-6">
                @foreach ($posts as $post)
                    <a href="{{ route('blog.show', $post->slug) }}" class="reveal block group">
                        <article class="bg-bg-card border border-white/6 rounded-xl overflow-hidden hover:border-accent/20 hover:-translate-y-0.5 transition-all duration-300">
                            <div class="flex flex-col md:flex-row">
                                @if ($post->featured_image)
                                    <div class="md:w-72 md:shrink-0">
                                        <img
                                            src="{{ asset('storage/' . $post->featured_image) }}"
                                            alt="{{ $post->title }}"
                                            class="w-full h-48 md:h-full object-cover"
                                            loading="lazy"
                                        >
                                    </div>
                                @endif
                                <div class="p-6 md:p-8 flex flex-col justify-center">
                                    <time class="font-mono text-xs text-text-secondary uppercase tracking-[1.5px] mb-2" datetime="{{ $post->published_at->toDateString() }}">
                                        {{ $post->published_at->format('M d, Y') }}
                                    </time>
                                    <h2 class="text-lg font-semibold tracking-tight mb-2 group-hover:text-accent transition-colors">
                                        {{ $post->title }}
                                    </h2>
                                    <p class="text-text-secondary text-sm leading-relaxed">
                                        {{ $post->getExcerpt() }}
                                    </p>
                                </div>
                            </div>
                        </article>
                    </a>
                @endforeach
            </div>

            <div class="mt-12">
                {{ $posts->links() }}
            </div>
        @endif

        <div class="mt-16 text-center">
            <a href="{{ route('home') }}" class="font-mono text-sm text-text-secondary underline decoration-text-secondary/30 hover:text-accent hover:decoration-accent transition-colors">
                &larr; Back to home
            </a>
        </div>
    </section>
</x-layouts.app>
