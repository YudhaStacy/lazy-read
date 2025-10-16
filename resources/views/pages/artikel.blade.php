@extends('layouts.main')

@section('content')
    <!-- Page Header -->
    <section class="px-6 pb-12">

        <h1 class="mb-4 text-5xl font-medium md:text-6xl">Semua Artikel</h1>
        <p class="text-lg text-gray-600 dark:text-gray-400">Jelajahi kisah dan perspektif terbaru yang kami sajikan
            setiap hari.</p>
    </section>

    <!-- Filter Bar -->
    <section class="px-6 pb-8 ">
        <div class="flex items-center gap-3 pb-2 overflow-x-auto">
            <!-- All button -->
            <a href="{{ route('artikel.index') }}"
                class="px-5 py-2.5 text-sm rounded-full whitespace-nowrap transition hover:scale-[1.05] active:scale-[0.95]
                {{ request()->routeIs('artikel.index') ? 'bg-black dark:bg-white text-white dark:text-black' : 'bg-gray-100 dark:bg-gray-900 text-gray-900 dark:text-gray-100 hover:bg-gray-200 dark:hover:bg-gray-800' }}">
                All
            </a>

            @foreach ($kategori as $k)
                <a href="{{ route('artikel.filter', ['slug' => $k->slug]) }}"
                    class="px-5 py-2.5 text-sm font-medium rounded-full whitespace-nowrap transition hover:scale-[1.05] active:scale-[0.95]
                    {{ request()->routeIs('artikel.filter') && request()->route('slug') === $k->slug
                        ? 'bg-black dark:bg-white text-white dark:text-black'
                        : 'bg-gray-100 dark:bg-gray-900 text-gray-900 dark:text-gray-100 hover:bg-gray-200 dark:hover:bg-gray-800' }}">
                    {{ $k->nama }}
                </a>
            @endforeach
        </div>
    </section>

    <!-- Articles Grid -->
    <section class="px-6 pb-16">
        <div class="grid gap-12 md:grid-cols-3">
            @foreach ($artikel as $a)
                <a href="{{ route('artikel.show', ['slug' => $a->slug]) }}" class="relative cursor-pointer group">
                    <div
                        class="overflow-hidden rounded-2xl bg-white dark:bg-gray-900/70 border border-gray-200 dark:border-gray-800 transition-all duration-300 group-hover:shadow-xl group-hover:scale-[1.02] group-active:scale-[0.95] group-hover:border-gray-300 dark:group-hover:border-gray-700 relative z-10">

                        <!-- Gradient background -->
                        <div
                            class="absolute bottom-0 right-0 w-full pointer-events-none h-1/2 bg-gradient-to-tl from-gray-600/20 via-transparent to-transparent rounded-tr-2xl">
                        </div>

                        <!-- Image -->
                        <div class="aspect-[16/8] overflow-hidden">
                            <img src="{{ $a->image_url ?? 'https://placehold.co/600x400' }}" alt="{{ $a->judul }}"
                                class="object-cover w-full h-full transition-transform duration-500">
                        </div>

                        <!-- Content -->
                        <div class="relative z-10 p-5">
                            <h3
                                class="mb-2 text-xl font-medium transition-colors group-hover:text-blue-600 dark:group-hover:text-blue-400">
                                {{ $a->judul }}
                            </h3>
                            <p class="mb-4 text-sm text-gray-600 dark:text-gray-400">
                                {{ $a->preview_teks }}
                            </p>

                            <!-- Category -->
                            <div
                                class="inline-block px-2 py-1 mb-4 text-xs bg-gray-100 border border-gray-300 rounded dark:border-gray-500/50 dark:bg-gray-800">
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
                </a>
            @endforeach
        </div>
    </section>
@endsection
