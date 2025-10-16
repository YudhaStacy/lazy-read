@extends('layouts.main')

@section('content')
    <!-- Hero Section -->

    <div class="grid items-center gap-12 md:grid-cols-2">
        <div>
            <div class="inline-block px-3 py-1 mb-4 text-xs bg-gray-100 rounded-full dark:bg-gray-900">
                Selamat Datang di LazyRead
            </div>

            <h1 class="mb-6 text-4xl font-medium leading-tight lg:text-6xl">
                Bacaan Ringan,<br> Wawasan Tak Terbatas
            </h1>

            <p class="mb-6 text-sm text-gray-600 md:text-md lg:text-lg dark:text-gray-400">
                Temukan kisah, ide, dan berita yang menginspirasi tanpa harus membaca panjang lebar.
                LazyRead — tempat di mana membaca jadi kebiasaan menyenangkan.
            </p>

            <div class="flex items-center gap-4 mb-8">
                <div class="flex items-center gap-2">
                    <div class="text-lg font-medium md:text-2xl">500+</div>
                    <span class="text-gray-600 text-md md:text-sm dark:text-gray-400">Articles</span>
                </div>
                <span class="text-sm text-gray-400">•</span>
                <div class="flex items-center gap-2">
                    <div class="text-lg font-medium md:text-2xl">50K+</div>
                    <span class="text-gray-600 text-md md:text-sm dark:text-gray-400">Readers</span>
                </div>
            </div>

            <div id="1" class="flex items-center gap-3">
                <a href="#1"
                    class="inline-block px-3 py-2 md:px-6 md:py-3 bg-black dark:bg-white text-white dark:text-black text-xs md:text-sm rounded-full hover:opacity-80 hover:scale-[1.05] active:scale-[0.95] transition">
                    Jelajahi Artikel
                </a>
                <a href="#"
                    class="inline-block px-3 py-2 md:px-6 md:py-3 border border-gray-300 dark:border-gray-700 text-gray-900 dark:text-white text-xs md:text-sm rounded-full hover:bg-gray-50 dark:hover:bg-gray-900 hover:scale-[1.05] active:scale-[0.95] transition">
                    Berlangganan
                </a>
            </div>
        </div>

        <div class="relative">
            <div class="relative hidden md:block">
                <div class="aspect-[4/3] bg-gray-100 dark:bg-gray-900 rounded-3xl overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1484807352052-23338990c6c6?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&q=80&w=1170"
                        alt="hero-img-lazyread" class="object-cover w-full h-full">
                </div>
            </div>
        </div>
    </div>

    <!-- Latest Articles Section -->
    <section id="artikel-terbaru" class="py-16 " data-aos="fade-up" data-aos-duration="1000" data-aos-once="true">
        <div class="max-w-6xl mx-auto">
            <div class="flex items-center justify-between mb-12">
                <h2 class="text-3xl font-medium">Artikel Terbaru</h2>
                <a href="#"
                    class="text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">Lihat
                    semua</a>
            </div>

            <div class="grid gap-12 md:grid-cols-3">
                @foreach ($artikel as $a)
                    <a href="{{ route('artikel.show', ['slug' => $a->slug]) }}" class="group">
                        <!-- Gambar artikel -->
                        <div
                            class="aspect-square sm:aspect-[16/10] bg-gray-100 dark:bg-gray-900 rounded-2xl overflow-hidden mb-4 ">
                            <img src="{{ $a->image_url ?? 'https://placehold.co/600x400' }}" alt="{{ $a->title }}"
                                class="object-cover w-full h-full transition-transform duration-300">
                        </div>

                        <!-- Kategori -->
                        <div class="inline-block px-2 py-1 mb-3 text-xs bg-gray-100 rounded dark:bg-gray-900">
                            {{ $a->kategori->nama ?? 'Tanpa Kategori' }}
                        </div>

                        <!-- Judul artikel -->
                        <h3 class="mb-2 text-xl font-medium group-hover:text-blue-600 dark:group-hover:text-blue-400">
                            {{ $a->judul }}
                        </h3>

                        <!-- Deskripsi / excerpt -->
                        <p class="mb-3 text-sm text-gray-600 dark:text-gray-400">
                            {{ Str::limit($a->isi, 100) }}
                        </p>

                        <!-- Tanggal dan estimasi waktu baca -->
                        <div class="flex items-center gap-2 text-xs text-gray-500 dark:text-gray-500">
                            <span>{{ $a->published_at ? $a->published_at->format('M d, Y') : '-' }}</span>
                            <span>•</span>
                            <span>4 min read</span>
                        </div>
                    </a>
                @endforeach
            </div>

        </div>
    </section>

    <!-- Trending Topics Section -->
    <section class="py-16 ">
        <div class="max-w-6xl mx-auto">
            <div class="flex items-center justify-between mb-12">
                <h2 class="text-3xl font-medium">Trending Topics</h2>
                <a href="#"
                    class="text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">Jelajahi
                    lebih banyak</a>
            </div>

            <div class="grid gap-12 md:grid-cols-2">
                <article class="cursor-pointer group">
                    <div
                        class="relative overflow-hidden transition-all duration-300 bg-gray-100 border border-gray-200 dark:border-gray-800 rounded-2xl dark:bg-gray-900 group-hover:shadow-2xl group-hover:-translate-y-1">
                        <div class="aspect-[16/9] overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1451187580459-43490279c0fa?w=800&q=80"
                                alt="Space" class="object-cover w-full h-full">
                        </div>
                        <div class="p-6">
                            <div
                                class="inline-block px-2 py-1 mb-3 text-xs text-blue-600 bg-blue-100 rounded dark:bg-blue-900/30 dark:text-blue-400">
                                Science</div>
                            <h3
                                class="mb-3 text-2xl font-medium transition-colors group-hover:text-blue-600 dark:group-hover:text-blue-400">
                                Space Exploration Milestones</h3>
                            <p class="mb-4 text-gray-600 dark:text-gray-400">Recent breakthroughs in space technology are
                                bringing us closer to interplanetary travel than ever before.</p>
                            <div class="flex items-center justify-between">
                                <div class="flex items-center gap-2">
                                    <div class="w-8 h-8 bg-gray-200 rounded-full dark:bg-gray-800"></div>
                                    <span class="text-sm text-gray-600 dark:text-gray-400">Dr. Maria Chen</span>
                                </div>
                                <span class="text-xs text-gray-500">7 min read</span>
                            </div>
                        </div>
                    </div>
                </article>

                <article class="cursor-pointer group">
                    <div
                        class="relative overflow-hidden transition-all duration-300 bg-gray-100 border border-gray-200 dark:border-gray-800 rounded-2xl dark:bg-gray-900 group-hover:shadow-2xl group-hover:-translate-y-1">
                        <div class="aspect-[16/9] overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1579621970563-ebec7560ff3e?w=800&q=80"
                                alt="Health" class="object-cover w-full h-full ">
                        </div>
                        <div class="p-6">
                            <div
                                class="inline-block px-2 py-1 mb-3 text-xs text-green-600 bg-green-100 rounded dark:bg-green-900/30 dark:text-green-400">
                                Health</div>
                            <h3
                                class="mb-3 text-2xl font-medium transition-colors group-hover:text-green-600 dark:group-hover:text-green-400">
                                Wellness in the Digital Age</h3>
                            <p class="mb-4 text-gray-600 dark:text-gray-400">Expert insights on maintaining physical and
                                mental health while navigating our connected world.</p>
                            <div class="flex items-center justify-between">
                                <div class="flex items-center gap-2">
                                    <div class="w-8 h-8 bg-gray-200 rounded-full dark:bg-gray-800"></div>
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
    {{-- <section class="px-6 py-16 bg-gray-50 dark:bg-gray-950">
        <div class="max-w-6xl mx-auto">
            <div class="mb-12">
                <h2 class="mb-2 text-3xl font-medium">Editor's Picks</h2>
                <p class="text-gray-600 dark:text-gray-400">Handpicked stories from our editorial team</p>
            </div>

            <div class="grid gap-6 md:grid-cols-4">
                <article class="cursor-pointer group">
                    <div
                        class="relative overflow-hidden transition-all duration-300 bg-white border border-gray-200 rounded-xl dark:bg-gray-900 dark:border-gray-800 group-hover:shadow-xl group-hover:-translate-y-1 group-hover:border-gray-300 dark:group-hover:border-gray-700">
                        <div class="aspect-[4/3] overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?w=400&q=80" alt="Finance"
                                class="object-cover w-full h-full transition-transform duration-500 group-hover:scale-110">
                        </div>
                        <div class="p-4">
                            <div
                                class="inline-block px-2 py-1 mb-2 text-xs text-purple-600 bg-purple-100 rounded dark:bg-purple-900/30 dark:text-purple-400">
                                Finance</div>
                            <h3
                                class="mb-2 text-base font-medium transition-colors group-hover:text-purple-600 dark:group-hover:text-purple-400">
                                Market Trends 2025</h3>
                            <p class="text-xs text-gray-500 dark:text-gray-500">Oct 12 • 3 min</p>
                        </div>
                    </div>
                </article>

                <article class="cursor-pointer group">
                    <div
                        class="relative overflow-hidden transition-all duration-300 bg-white border border-gray-200 rounded-xl dark:bg-gray-900 dark:border-gray-800 group-hover:shadow-xl group-hover:-translate-y-1 group-hover:border-gray-300 dark:group-hover:border-gray-700">
                        <div class="aspect-[4/3] overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1542744173-8e7e53415bb0?w=400&q=80" alt="Leadership"
                                class="object-cover w-full h-full transition-transform duration-500 group-hover:scale-110">
                        </div>
                        <div class="p-4">
                            <div
                                class="inline-block px-2 py-1 mb-2 text-xs text-orange-600 bg-orange-100 rounded dark:bg-orange-900/30 dark:text-orange-400">
                                Leadership</div>
                            <h3
                                class="mb-2 text-base font-medium transition-colors group-hover:text-orange-600 dark:group-hover:text-orange-400">
                                Future of Work</h3>
                            <p class="text-xs text-gray-500 dark:text-gray-500">Oct 11 • 5 min</p>
                        </div>
                    </div>
                </article>

                <article class="cursor-pointer group">
                    <div
                        class="relative overflow-hidden transition-all duration-300 bg-white border border-gray-200 rounded-xl dark:bg-gray-900 dark:border-gray-800 group-hover:shadow-xl group-hover:-translate-y-1 group-hover:border-gray-300 dark:group-hover:border-gray-700">
                        <div class="aspect-[4/3] overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1476357471311-43c0db9fb2b4?w=400&q=80"
                                alt="Environment"
                                class="object-cover w-full h-full transition-transform duration-500 group-hover:scale-110">
                        </div>
                        <div class="p-4">
                            <div
                                class="inline-block px-2 py-1 mb-2 text-xs text-teal-600 bg-teal-100 rounded dark:bg-teal-900/30 dark:text-teal-400">
                                Environment</div>
                            <h3
                                class="mb-2 text-base font-medium transition-colors group-hover:text-teal-600 dark:group-hover:text-teal-400">
                                Climate Solutions</h3>
                            <p class="text-xs text-gray-500 dark:text-gray-500">Oct 10 • 4 min</p>
                        </div>
                    </div>
                </article>

                <article class="cursor-pointer group">
                    <div
                        class="relative overflow-hidden transition-all duration-300 bg-white border border-gray-200 rounded-xl dark:bg-gray-900 dark:border-gray-800 group-hover:shadow-xl group-hover:-translate-y-1 group-hover:border-gray-300 dark:group-hover:border-gray-700">
                        <div class="aspect-[4/3] overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1501139083538-0139583c060f?w=400&q=80"
                                alt="Design"
                                class="object-cover w-full h-full transition-transform duration-500 group-hover:scale-110">
                        </div>
                        <div class="p-4">
                            <div
                                class="inline-block px-2 py-1 mb-2 text-xs text-pink-600 bg-pink-100 rounded dark:bg-pink-900/30 dark:text-pink-400">
                                Design</div>
                            <h3
                                class="mb-2 text-base font-medium transition-colors group-hover:text-pink-600 dark:group-hover:text-pink-400">
                                Minimalist Living</h3>
                            <p class="text-xs text-gray-500 dark:text-gray-500">Oct 9 • 4 min</p>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </section> --}}
@endsection
