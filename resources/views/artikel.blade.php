@extends('layouts.main')

@section('content')
    <!-- Page Header -->
    <section class="pb-12 px-6">

        <h1 class="text-5xl md:text-6xl font-medium mb-4">Semua Artikel</h1>
        <p class="text-lg text-gray-600 dark:text-gray-400">Jelajahi kisah dan perspektif terbaru yang kami sajikan
            setiap hari.</p>
    </section>

    <!-- Filter Bar -->
    <section class="pb-8 px-6 ">

        <div class="flex items-center gap-3 overflow-x-auto pb-2">
            <button
                class="px-5 py-2.5 bg-black dark:bg-white text-white dark:text-black text-sm rounded-full hover:opacity-80 whitespace-nowrap hover:scale-[1.05] active:scale-[0.95] transition">
                All
            </button>
            @foreach ($kategori as $k)
                <button
                    class="px-5 py-2.5 bg-gray-100 text-gray-900 dark:bg-gray-900 dark:text-gray-100 text-sm font-medium rounded-full transition duration-200 hover:bg-gray-200 dark:hover:bg-gray-800 whitespace-nowrap hover:scale-[1.05] active:scale-[0.95]">
                    {{ $k->nama }}
                </button>
            @endforeach
        </div>

    </section>

    <!-- Articles Grid -->
    <section class="pb-16 px-6">
        <div class="grid md:grid-cols-3 gap-12">
            @foreach ($artikel as $a)
                <article class="group cursor-pointer relative">
                    <div
                        class="overflow-hidden rounded-2xl bg-white dark:bg-gray-900/70 border border-gray-200 dark:border-gray-800 transition-all duration-300 group-hover:shadow-xl group-hover:scale-[1.02] group-hover:border-gray-300 dark:group-hover:border-gray-700 relative z-10">

                        <!-- Gradient background -->
                        <div
                            class="absolute bottom-0 right-0 w-full h-1/2 bg-gradient-to-tl from-gray-600/20 via-transparent to-transparent pointer-events-none rounded-tr-2xl">
                        </div>

                        <!-- Image -->
                        <div class="aspect-[16/8] overflow-hidden">
                            <img src="{{ $a->image_url ?? 'https://placehold.co/600x400' }}" alt="{{ $a->judul }}"
                                class="w-full h-full object-cover transition-transform duration-500">
                        </div>

                        <!-- Content -->
                        <div class="p-5 relative z-10">
                            <h3
                                class="text-xl font-medium mb-2 group-hover:text-blue-600 dark:group-hover:text-blue-400 transition-colors">
                                {{ $a->judul }}
                            </h3>
                            <p class="text-sm text-gray-600 dark:text-gray-400 mb-4">
                                {{ Str::limit($a->preview_teks, 100) }}
                            </p>

                            <!-- Category -->
                            <div
                                class="inline-block px-2 py-1 border border-gray-900 dark:border-gray-500/50 bg-gray-100 dark:bg-gray-800 rounded text-xs mb-4">
                                {{ $a->kategori->nama ?? 'Uncategorized' }}
                            </div>

                            <!-- Author + Date -->
                            <div class="flex items-center justify-between">
                                <span class="text-xs text-gray-600 dark:text-gray-400">{{ $a->author }}</span>
                                <span class="text-xs text-gray-500">
                                    {{ $a->published_at ? $a->published_at->format('M d, Y') : '—' }} -
                                    {{ $a->read_time }} min read
                                </span>
                            </div>
                        </div>
                    </div>
                </article>
            @endforeach
        </div>
    </section>
@endsection
