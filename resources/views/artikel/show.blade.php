@extends('layouts.main')

@section('content')
    <!-- Article Header -->
    <article class="px-6 pb-16">
        <div class="max-w-3xl mx-auto">
            <!-- Category -->
            <div class="flex items-center gap-2 mb-6 text-sm">
                <a href="{{ route('artikel.index') }}" class="flex items-center gap-1 text-neutral-500 ">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 " viewBox="0 0 24 24">
                        <path fill="currentColor"
                            d="M19 11H7.14l3.63-4.36a1 1 0 1 0-1.54-1.28l-5 6a1 1 0 0 0-.09.15c0 .05 0 .08-.07.13A1 1 0 0 0 4 12a1 1 0 0 0 .07.36c0 .05 0 .08.07.13a1 1 0 0 0 .09.15l5 6A1 1 0 0 0 10 19a1 1 0 0 0 .64-.23a1 1 0 0 0 .13-1.41L7.14 13H19a1 1 0 0 0 0-2" />
                    </svg>
                    <span class="hover:underline">Article</span>
                    <span>/</span>
                </a>

                <a href="{{ route('artikel.filter', ['slug' => $artikel->kategori->slug]) }}"
                    class="text-gray-00 hover:underline">
                    {{ $artikel->kategori->nama }}
                </a>
            </div>

            <!-- Title -->
            <h1 class="mb-6 text-4xl font-medium leading-tight md:text-5xl">
                {{ $artikel->judul }}
            </h1>

            <!-- Excerpt -->
            <p class="mb-8 text-xl text-gray-600 dark:text-gray-300">
                {{ $artikel->preview_teks }}
            </p>

            <!-- details -->
            <div class="flex items-center justify-between pb-8 mb-8 border-b border-gray-200 dark:border-gray-800">
                <div class="flex items-center gap-4">
                    <div class="text-[16px] text-gray-800 font-medium dark:text-gray-200">{{ $artikel->author }}</div>
                    <div class="flex items-center text-sm text-gray-500 dark:text-gray-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mr-1" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        {{ $artikel->read_time }} min read
                    </div>

                    <button id="copyBtn"
                        class="flex items-center text-sm text-blue-500 transition-all duration-300 cursor-pointer dark:text-blue-300 ">
                        <!-- Icon awal: link -->
                        <svg id="iconLink" xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mr-1" viewBox="0 0 1024 1024">
                            <path fill="currentColor"
                                d="M574 665.4a8.03 8.03 0 0 0-11.3 0L446.5 781.6c-53.8 53.8-144.6 59.5-204 0c-59.5-59.5-53.8-150.2 0-204l116.2-116.2c3.1-3.1 3.1-8.2 0-11.3l-39.8-39.8a8.03 8.03 0 0 0-11.3 0L191.4 526.5c-84.6 84.6-84.6 221.5 0 306s221.5 84.6 306 0l116.2-116.2c3.1-3.1 3.1-8.2 0-11.3zm258.6-474c-84.6-84.6-221.5-84.6-306 0L410.3 307.6a8.03 8.03 0 0 0 0 11.3l39.7 39.7c3.1 3.1 8.2 3.1 11.3 0l116.2-116.2c53.8-53.8 144.6-59.5 204 0c59.5 59.5 53.8 150.2 0 204L665.3 562.6a8.03 8.03 0 0 0 0 11.3l39.8 39.8c3.1 3.1 8.2 3.1 11.3 0l116.2-116.2c84.5-84.6 84.5-221.5 0-306.1M610.1 372.3a8.03 8.03 0 0 0-11.3 0L372.3 598.7a8.03 8.03 0 0 0 0 11.3l39.6 39.6c3.1 3.1 8.2 3.1 11.3 0l226.4-226.4c3.1-3.1 3.1-8.2 0-11.3z" />
                        </svg>

                        <svg id="iconCheck" xmlns="http://www.w3.org/2000/svg" class="hidden w-4 h-4 mr-1" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>

                        <span id="btnText">Copy URL</span>
                    </button>
                </div>

                <span class="text-sm text-gray-500 dark:text-gray-500">{{ $artikel->published_at->format('M d, Y') }}</span>
            </div>

            <!-- Featured Image -->
            <div class="mb-12 overflow-hidden bg-gray-100 aspect-video dark:bg-gray-900">
                <img src="{{ $artikel->image_url ?? 'https://placehold.co/600x400' }}" alt="{{ $artikel->judul }}"
                    class="object-cover w-full h-full">
            </div>

            <div class="prose prose-lg max-w-none">
                <p class="mb-6 leading-relaxed text-gray-700 dark:text-gray-200">
                    {{ $artikel->isi }}
                </p>
            </div>
            <!-- Article Content -->
            {{-- <div class="prose prose-lg max-w-none">
                <p class="mb-6 leading-relaxed text-gray-700 dark:text-gray-300">
                    Artificial Intelligence has evolved from a futuristic concept into an integral part of our daily lives.
                    Whether we realize it or not, AI systems are working behind the scenes in our smartphones, recommending
                    content on streaming platforms, and even helping doctors diagnose diseases.
                </p>

                <h2 class="mt-10 mb-4 text-2xl font-medium">The Current State of AI</h2>
                <p class="mb-6 leading-relaxed text-gray-700 dark:text-gray-300">
                    Today's AI systems have achieved remarkable milestones. Machine learning algorithms can now process and
                    analyze vast amounts of data in seconds, identifying patterns that would take humans years to discover.
                    Natural language processing has advanced to the point where AI can engage in surprisingly human-like
                    conversations.
                </p>

                <p class="mb-6 leading-relaxed text-gray-700 dark:text-gray-300">
                    In healthcare, AI is helping radiologists detect cancer earlier and more accurately. In finance,
                    algorithms are detecting fraudulent transactions in real-time. Self-driving cars are becoming
                    increasingly sophisticated, promising to revolutionize transportation as we know it.
                </p>

                <div class="p-6 my-8 border border-gray-200 bg-gray-50 dark:bg-gray-900 rounded-2xl dark:border-gray-800">
                    <p class="italic text-gray-700 dark:text-gray-300">
                        "AI is not just about technology—it's about amplifying human potential and solving problems that
                        were previously insurmountable." — Dr. Emily Chen, AI Research Director
                    </p>
                </div>

                <h2 class="mt-10 mb-4 text-2xl font-medium">Challenges and Concerns</h2>
                <p class="mb-6 leading-relaxed text-gray-700 dark:text-gray-300">
                    Despite the promise, AI development raises important questions. Privacy concerns loom large as AI
                    systems collect and process personal data. There are worries about job displacement as automation
                    becomes more sophisticated. Bias in AI algorithms has led to unfair outcomes in everything from loan
                    applications to criminal justice.
                </p>

                <p class="mb-6 leading-relaxed text-gray-700 dark:text-gray-300">
                    Researchers and policymakers are working to address these challenges. New frameworks for ethical AI
                    development are emerging, focusing on transparency, fairness, and accountability. Companies are
                    investing in "explainable AI" that can show how decisions are made, rather than operating as a black
                    box.
                </p>

                <h2 class="mt-10 mb-4 text-2xl font-medium">Looking Ahead</h2>
                <p class="mb-6 leading-relaxed text-gray-700 dark:text-gray-300">
                    The next decade will likely see AI become even more integrated into our lives. Experts predict advances
                    in areas like quantum computing could dramatically increase AI capabilities. The key will be ensuring
                    that as AI grows more powerful, it remains aligned with human values and serves the greater good.
                </p>

                <p class="mb-6 leading-relaxed text-gray-700 dark:text-gray-300">
                    Education systems are adapting to prepare the next generation for an AI-driven world. Rather than
                    competing with machines, the focus is on developing uniquely human skills—creativity, emotional
                    intelligence, and critical thinking—that complement AI capabilities.
                </p>

                <p class="mb-6 leading-relaxed text-gray-700 dark:text-gray-300">
                    As we stand at this technological crossroads, one thing is clear: AI will continue to reshape our world
                    in profound ways. The challenge before us is to guide this transformation thoughtfully, ensuring that
                    the benefits of AI are shared broadly and that its development reflects our collective values and
                    aspirations.
                </p>
            </div> --}}

            <!-- Tags -->
            <div class="flex flex-wrap gap-2 pt-8 mt-12 border-t border-gray-200 dark:border-gray-800">
                <span
                    class="px-3 py-1 text-sm text-gray-600 bg-gray-100 rounded-full dark:bg-gray-900 dark:text-gray-400">Artificial
                    Intelligence</span>
                <span
                    class="px-3 py-1 text-sm text-gray-600 bg-gray-100 rounded-full dark:bg-gray-900 dark:text-gray-400">Machine
                    Learning</span>
                <span
                    class="px-3 py-1 text-sm text-gray-600 bg-gray-100 rounded-full dark:bg-gray-900 dark:text-gray-400">Technology</span>
                <span
                    class="px-3 py-1 text-sm text-gray-600 bg-gray-100 rounded-full dark:bg-gray-900 dark:text-gray-400">Future</span>
            </div>
        </div>
    </article>
@endsection

@push('scripts')
    <script>
        const btn = document.getElementById('copyBtn');
        const iconLink = document.getElementById('iconLink');
        const iconCheck = document.getElementById('iconCheck');
        const btnText = document.getElementById('btnText');

        btn.addEventListener('click', () => {
            navigator.clipboard.writeText(window.location.href).then(() => {
                iconLink.classList.add('hidden');
                iconCheck.classList.remove('hidden');
                btnText.textContent = 'Copied!';
                setTimeout(() => {
                    iconLink.classList.remove('hidden');
                    iconCheck.classList.add('hidden');
                    btnText.textContent = 'Copy URL';
                }, 2000);
            });
        });
    </script>
@endpush
