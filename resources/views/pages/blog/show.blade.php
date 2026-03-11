<x-layouts.app :title="$post->title . ' | andrashorvath.dev'">
    <article class="pt-32 pb-24 max-w-275 mx-auto px-4 sm:px-8">
        {{-- Header --}}
        <div class="max-w-3xl mx-auto mb-12">
            <a href="{{ route('blog.index') }}" class="font-mono text-sm text-text-secondary underline decoration-text-secondary/30 hover:text-accent hover:decoration-accent transition-colors inline-block mb-8">
                &larr; All posts
            </a>

            <time class="font-mono text-xs text-accent uppercase tracking-[2px] block mb-3" datetime="{{ $post->published_at->toDateString() }}">
                {{ $post->published_at->format('M d, Y') }}
            </time>
            <h1 class="text-3xl md:text-4xl font-semibold tracking-tight mb-4">{{ $post->title }}</h1>
        </div>

        {{-- Featured image --}}
        @if ($post->featured_image)
            <div class="max-w-4xl mx-auto mb-12">
                <img
                    src="{{ asset('storage/' . $post->featured_image) }}"
                    alt="{{ $post->title }}"
                    class="w-full rounded-xl border border-white/6"
                    loading="eager"
                >
            </div>
        @endif

        {{-- Content --}}
        <div class="max-w-3xl mx-auto prose-blog">
            {!! $post->content !!}
        </div>

        {{-- Footer nav --}}
        <div class="max-w-3xl mx-auto mt-16 pt-8 border-t border-border">
            <a href="{{ route('blog.index') }}" class="font-mono text-sm text-text-secondary underline decoration-text-secondary/30 hover:text-accent hover:decoration-accent transition-colors">
                &larr; All posts
            </a>
        </div>
    </article>
</x-layouts.app>
