<section id="testimonials" class="py-24 max-w-275 mx-auto px-4 sm:px-8">
    <div class="reveal">
        <p class="font-mono text-sm text-accent uppercase tracking-[2px] mb-3 flex items-center gap-2.5">
            <span class="w-0.5 h-4 bg-accent shrink-0 animate-blink" aria-hidden="true"></span>
            What clients say
        </p>
        <h2 class="text-2xl font-semibold tracking-tight mb-12">References</h2>
    </div>

    <div class="grid md:grid-cols-2 gap-6">
        {{-- Featured testimonial --}}
        <article class="reveal bg-bg-card border border-white/6 rounded-xl p-8 md:p-10 flex flex-col hover:border-accent-green/20 transition-all duration-300">
            <p class="font-mono text-xs text-accent-green uppercase tracking-[1.5px] mb-4">Online cash register reseller platform</p>

            <blockquote class="text-text-secondary text-lg leading-relaxed mb-4">
                &ldquo;Andras built us a backend system that lets me see any analytics about our customers within a minute. Since then, I can focus on strategic management tasks, because the website works 24 hours a day, on its own, producing new customers. We became the leading cash register reseller in Hungary with an automated platform handling communication, scheduling, and regulatory compliance, exceeding even our own goal of doubling the customer base.&rdquo;
            </blockquote>

            <p class="font-mono text-sm text-accent-green/80 leading-relaxed mb-8">&ldquo;If I could have one wish for my business, it would be to always have professionals like Andras around — that's the key to our success.&rdquo;</p>

            <footer class="mt-auto">
                <p class="text-text-primary font-semibold">Co-founder</p>
                <p class="text-text-secondary text-sm">AP Cash Ltd.</p>
            </footer>
        </article>

        {{-- Other testimonials --}}
        <div class="flex flex-col gap-6">
            @foreach ([
                [
                    'quote' => 'The software Andras developed handles a high volume of customers and transactions reliably and transparently. He always focused on making the system as easy to use as possible, training new users was effortless.',
                    'title' => 'CEO',
                    'company' => 'MediLine Uzlethaz Ltd.',
                    'project' => 'Loyalty & coupon terminal system',
                    'color' => 'accent-purple',
                ],
                [
                    'quote' => 'I would recommend Andras anytime as a backend developer. His job was penetration testing and developing new functions for our industrial safety compliance system.',
                    'title' => 'Managing Director',
                    'company' => 'EPDS Ltd.',
                    'project' => 'Hazardous area compliance software',
                    'color' => 'accent',
                ],
            ] as $testimonial)
                <article class="reveal bg-bg-card border border-white/6 rounded-xl p-8 flex flex-col flex-1 hover:border-{{ $testimonial['color'] }}/20 transition-all duration-300">
                    <p class="font-mono text-xs text-{{ $testimonial['color'] }} uppercase tracking-[1.5px] mb-4">{{ $testimonial['project'] }}</p>

                    <blockquote class="text-text-secondary text-base leading-relaxed mb-6 flex-1">
                        &ldquo;{{ $testimonial['quote'] }}&rdquo;
                    </blockquote>

                    <footer>
                        <p class="text-text-primary font-semibold">{{ $testimonial['title'] }}</p>
                        <p class="text-text-secondary text-sm">{{ $testimonial['company'] }}</p>
                    </footer>
                </article>
            @endforeach
        </div>
    </div>
</section>
