@extends('layouts.main')

@section('content')
    <!-- Hero Section -->

    <div class="grid md:grid-cols-2 gap-12 items-center">
        <div>
            <div class="inline-block px-3 py-1 bg-gray-100 dark:bg-gray-900 rounded-full text-xs mb-4">
                Selamat Datang di LazyRead
            </div>

            <h1 class="text-5xl md:text-6xl font-medium mb-6 leading-tight">
                Bacaan Ringan, Wawasan Tak Terbatas
            </h1>

            <p class="text-lg text-gray-600 dark:text-gray-400 mb-6">
                Temukan kisah, ide, dan berita yang menginspirasi tanpa harus membaca panjang lebar.
                LazyRead — tempat di mana membaca jadi kebiasaan menyenangkan.
            </p>

            <div class="flex items-center gap-4 mb-8">
                <div class="flex items-center gap-2">
                    <div class="text-2xl font-medium">500+</div>
                    <span class="text-sm text-gray-600 dark:text-gray-400">Articles</span>
                </div>
                <span class="text-sm text-gray-400">•</span>
                <div class="flex items-center gap-2">
                    <div class="text-2xl font-medium">50K+</div>
                    <span class="text-sm text-gray-600 dark:text-gray-400">Readers</span>
                </div>
            </div>

            <div class="flex items-center gap-3">
                <a href="#artikel-terbaru"
                    class="inline-block px-6 py-3 bg-black dark:bg-white text-white dark:text-black text-sm rounded-full hover:opacity-80 hover:scale-[1.05] active:scale-[0.95] transition">
                    Jelajahi Artikel
                </a>
                <a href="#"
                    class="inline-block px-6 py-3 border border-gray-300 dark:border-gray-700 text-gray-900 dark:text-white text-sm rounded-full hover:bg-gray-50 dark:hover:bg-gray-900 hover:scale-[1.05] active:scale-[0.95] transition">
                    Berlangganan
                </a>
            </div>
        </div>

        <div class="relative">
            <div class="relative hidden sm:block">
                <div class="aspect-[4/3] bg-gray-100 dark:bg-gray-900 rounded-3xl overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1484807352052-23338990c6c6?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&q=80&w=1170"
                        alt="hero-img-lazyread" class="w-full h-full object-cover">
                </div>
            </div>
        </div>
    </div>

    <!-- Latest Articles Section -->
    <section id="artikel-terbaru" class="py-16 px-6" data-aos="fade-up" data-aos-duration="1000">
        <div class="max-w-6xl mx-auto">
            <div class="flex items-center justify-between mb-12">
                <h2 class="text-3xl font-medium">Artikel Terbaru</h2>
                <a href="#"
                    class="text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">Lihat
                    semua</a>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                @foreach ($artikel as $a)
                    <article class="group">
                        <!-- Gambar artikel -->
                        <div class="aspect-[16/10] bg-gray-100 dark:bg-gray-900 rounded-2xl overflow-hidden mb-4 ">
                            <img src="{{ $a->image_url ?? 'https://placehold.co/600x400' }}" alt="{{ $a->title }}"
                                class="w-full h-full object-cover transition-transform duration-300">
                        </div>

                        <!-- Kategori -->
                        <div class="inline-block px-2 py-1 bg-gray-100 dark:bg-gray-900 rounded text-xs mb-3">
                            {{ $a->kategori->nama ?? 'Tanpa Kategori' }}
                        </div>

                        <!-- Judul artikel -->
                        <h3 class="text-xl font-medium mb-2 group-hover:text-blue-600 dark:group-hover:text-blue-400">
                            {{ $a->judul }}
                        </h3>

                        <!-- Deskripsi / excerpt -->
                        <p class="text-sm text-gray-600 dark:text-gray-400 mb-3">
                            {{ Str::limit($a->isi, 100) }}
                        </p>

                        <!-- Tanggal dan estimasi waktu baca -->
                        <div class="flex items-center gap-2 text-xs text-gray-500 dark:text-gray-500">
                            <span>{{ $a->published_at ? $a->published_at->format('M d, Y') : '-' }}</span>
                            <span>•</span>
                            <span>4 min read</span>
                        </div>
                    </article>
                @endforeach
            </div>

        </div>
    </section>

    <!-- Trending Topics Section -->
    <section class="py-16 px-6">
        <div class="max-w-6xl mx-auto">
            <div class="flex items-center justify-between mb-12">
                <h2 class="text-3xl font-medium">Trending Topics</h2>
                <a href="#"
                    class="text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">Jelajahi
                    lebih banyak</a>
            </div>

            <div class="grid md:grid-cols-2 gap-8">
                <article class="group cursor-pointer">
                    <div
                        class="relative overflow-hidden rounded-2xl bg-gray-100 dark:bg-gray-900 transition-all duration-300 group-hover:shadow-2xl group-hover:-translate-y-1">
                        <div class="aspect-[16/9] overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1451187580459-43490279c0fa?w=800&q=80"
                                alt="Space"
                                class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        </div>
                        <div class="p-6">
                            <div
                                class="inline-block px-2 py-1 bg-blue-100 dark:bg-blue-900/30 text-blue-600 dark:text-blue-400 rounded text-xs mb-3">
                                Science</div>
                            <h3
                                class="text-2xl font-medium mb-3 group-hover:text-blue-600 dark:group-hover:text-blue-400 transition-colors">
                                Space Exploration Milestones</h3>
                            <p class="text-gray-600 dark:text-gray-400 mb-4">Recent breakthroughs in space technology are
                                bringing us closer to interplanetary travel than ever before.</p>
                            <div class="flex items-center justify-between">
                                <div class="flex items-center gap-2">
                                    <div class="w-8 h-8 bg-gray-200 dark:bg-gray-800 rounded-full"></div>
                                    <span class="text-sm text-gray-600 dark:text-gray-400">Dr. Maria Chen</span>
                                </div>
                                <span class="text-xs text-gray-500">7 min read</span>
                            </div>
                        </div>
                    </div>
                </article>

                <article class="group cursor-pointer">
                    <div
                        class="relative overflow-hidden rounded-2xl bg-gray-100 dark:bg-gray-900 transition-all duration-300 group-hover:shadow-2xl group-hover:-translate-y-1">
                        <div class="aspect-[16/9] overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1579621970563-ebec7560ff3e?w=800&q=80"
                                alt="Health"
                                class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        </div>
                        <div class="p-6">
                            <div
                                class="inline-block px-2 py-1 bg-green-100 dark:bg-green-900/30 text-green-600 dark:text-green-400 rounded text-xs mb-3">
                                Health</div>
                            <h3
                                class="text-2xl font-medium mb-3 group-hover:text-green-600 dark:group-hover:text-green-400 transition-colors">
                                Wellness in the Digital Age</h3>
                            <p class="text-gray-600 dark:text-gray-400 mb-4">Expert insights on maintaining physical and
                                mental health while navigating our connected world.</p>
                            <div class="flex items-center justify-between">
                                <div class="flex items-center gap-2">
                                    <div class="w-8 h-8 bg-gray-200 dark:bg-gray-800 rounded-full"></div>
                                    <span class="text-sm text-gray-600 dark:text-gray-400">Dr. James Wilson</span>
                                </div>
                                <span class="text-xs text-gray-500">6 min read</span>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <!-- Editor's Picks Section -->
    {{-- <section class="py-16 px-6 bg-gray-50 dark:bg-gray-950">
        <div class="max-w-6xl mx-auto">
            <div class="mb-12">
                <h2 class="text-3xl font-medium mb-2">Editor's Picks</h2>
                <p class="text-gray-600 dark:text-gray-400">Handpicked stories from our editorial team</p>
            </div>

            <div class="grid md:grid-cols-4 gap-6">
                <article class="group cursor-pointer">
                    <div
                        class="relative overflow-hidden rounded-xl bg-white dark:bg-gray-900 border border-gray-200 dark:border-gray-800 transition-all duration-300 group-hover:shadow-xl group-hover:-translate-y-1 group-hover:border-gray-300 dark:group-hover:border-gray-700">
                        <div class="aspect-[4/3] overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?w=400&q=80" alt="Finance"
                                class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        </div>
                        <div class="p-4">
                            <div
                                class="inline-block px-2 py-1 bg-purple-100 dark:bg-purple-900/30 text-purple-600 dark:text-purple-400 rounded text-xs mb-2">
                                Finance</div>
                            <h3
                                class="text-base font-medium mb-2 group-hover:text-purple-600 dark:group-hover:text-purple-400 transition-colors">
                                Market Trends 2025</h3>
                            <p class="text-xs text-gray-500 dark:text-gray-500">Oct 12 • 3 min</p>
                        </div>
                    </div>
                </article>

                <article class="group cursor-pointer">
                    <div
                        class="relative overflow-hidden rounded-xl bg-white dark:bg-gray-900 border border-gray-200 dark:border-gray-800 transition-all duration-300 group-hover:shadow-xl group-hover:-translate-y-1 group-hover:border-gray-300 dark:group-hover:border-gray-700">
                        <div class="aspect-[4/3] overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1542744173-8e7e53415bb0?w=400&q=80" alt="Leadership"
                                class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        </div>
                        <div class="p-4">
                            <div
                                class="inline-block px-2 py-1 bg-orange-100 dark:bg-orange-900/30 text-orange-600 dark:text-orange-400 rounded text-xs mb-2">
                                Leadership</div>
                            <h3
                                class="text-base font-medium mb-2 group-hover:text-orange-600 dark:group-hover:text-orange-400 transition-colors">
                                Future of Work</h3>
                            <p class="text-xs text-gray-500 dark:text-gray-500">Oct 11 • 5 min</p>
                        </div>
                    </div>
                </article>

                <article class="group cursor-pointer">
                    <div
                        class="relative overflow-hidden rounded-xl bg-white dark:bg-gray-900 border border-gray-200 dark:border-gray-800 transition-all duration-300 group-hover:shadow-xl group-hover:-translate-y-1 group-hover:border-gray-300 dark:group-hover:border-gray-700">
                        <div class="aspect-[4/3] overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1476357471311-43c0db9fb2b4?w=400&q=80"
                                alt="Environment"
                                class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        </div>
                        <div class="p-4">
                            <div
                                class="inline-block px-2 py-1 bg-teal-100 dark:bg-teal-900/30 text-teal-600 dark:text-teal-400 rounded text-xs mb-2">
                                Environment</div>
                            <h3
                                class="text-base font-medium mb-2 group-hover:text-teal-600 dark:group-hover:text-teal-400 transition-colors">
                                Climate Solutions</h3>
                            <p class="text-xs text-gray-500 dark:text-gray-500">Oct 10 • 4 min</p>
                        </div>
                    </div>
                </article>

                <article class="group cursor-pointer">
                    <div
                        class="relative overflow-hidden rounded-xl bg-white dark:bg-gray-900 border border-gray-200 dark:border-gray-800 transition-all duration-300 group-hover:shadow-xl group-hover:-translate-y-1 group-hover:border-gray-300 dark:group-hover:border-gray-700">
                        <div class="aspect-[4/3] overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1501139083538-0139583c060f?w=400&q=80"
                                alt="Design"
                                class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        </div>
                        <div class="p-4">
                            <div
                                class="inline-block px-2 py-1 bg-pink-100 dark:bg-pink-900/30 text-pink-600 dark:text-pink-400 rounded text-xs mb-2">
                                Design</div>
                            <h3
                                class="text-base font-medium mb-2 group-hover:text-pink-600 dark:group-hover:text-pink-400 transition-colors">
                                Minimalist Living</h3>
                            <p class="text-xs text-gray-500 dark:text-gray-500">Oct 9 • 4 min</p>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </section> --}}
@endsection
