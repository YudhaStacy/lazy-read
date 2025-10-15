@extends('layouts.main')

@section('content')
    <!-- Page Header -->
    <section class="pt-32 pb-12 px-6">
        <div class="max-w-6xl mx-auto">
            <h1 class="text-5xl md:text-6xl font-medium mb-4">All Articles</h1>
            <p class="text-lg text-gray-600 dark:text-gray-400">Discover our latest stories and insights</p>
        </div>
    </section>

    <!-- Filter Bar -->
    <section class="pb-8 px-6 ">
        <div class="max-w-6xl mx-auto">
            <div class="flex items-center gap-3 overflow-x-auto pb-2">
                <button
                    class="px-4 py-2 bg-black dark:bg-white text-white dark:text-black text-sm rounded-full hover:opacity-80 whitespace-nowrap">
                    All
                </button>
                <button
                    class="px-4 py-2 bg-gray-100 dark:bg-gray-900 text-gray-900 dark:text-white text-sm rounded-full hover:bg-gray-200 dark:hover:bg-gray-800 whitespace-nowrap">
                    Technology
                </button>
                <button
                    class="px-4 py-2 bg-gray-100 dark:bg-gray-900 text-gray-900 dark:text-white text-sm rounded-full hover:bg-gray-200 dark:hover:bg-gray-800 whitespace-nowrap">
                    Business
                </button>
                <button
                    class="px-4 py-2 bg-gray-100 dark:bg-gray-900 text-gray-900 dark:text-white text-sm rounded-full hover:bg-gray-200 dark:hover:bg-gray-800 whitespace-nowrap">
                    Culture
                </button>
                <button
                    class="px-4 py-2 bg-gray-100 dark:bg-gray-900 text-gray-900 dark:text-white text-sm rounded-full hover:bg-gray-200 dark:hover:bg-gray-800 whitespace-nowrap">
                    Science
                </button>
                <button
                    class="px-4 py-2 bg-gray-100 dark:bg-gray-900 text-gray-900 dark:text-white text-sm rounded-full hover:bg-gray-200 dark:hover:bg-gray-800 whitespace-nowrap">
                    Health
                </button>
                <button
                    class="px-4 py-2 bg-gray-100 dark:bg-gray-900 text-gray-900 dark:text-white text-sm rounded-full hover:bg-gray-200 dark:hover:bg-gray-800 whitespace-nowrap">
                    Design
                </button>
            </div>
        </div>
    </section>

    <!-- Articles Grid -->
    <section class="pb-16 px-6">
        <div class="max-w-6xl mx-auto">
            <div class="grid md:grid-cols-3 gap-8">
                <article class="group cursor-pointer relative">
                    <div
                        class="overflow-hidden rounded-2xl bg-white dark:bg-gray-900/70 border border-gray-200 dark:border-gray-800 transition-all duration-300 group-hover:shadow-xl group-hover:scale-[1.02] group-hover:border-gray-300 dark:group-hover:border-gray-700 relative z-10">

                        <div
                            class="absolute bottom-0 right-0 w-full h-1/2 bg-gradient-to-tl from-gray-600/20 via-transparent to-transparent pointer-events-none rounded-tr-2xl">
                        </div>

                        <div class="aspect-[16/10] overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1488590528505-98d2b5aba04b?w=600&q=80"
                                alt="AI Technology" class="w-full h-full object-cover transition-transform duration-500">
                        </div>
                        <div class="p-5 relative z-10">

                            <h3
                                class="text-xl font-medium mb-2 group-hover:text-blue-600 dark:group-hover:text-blue-400 transition-colors">
                                AI Revolution in Everyday Life</h3>
                            <p class="text-sm text-gray-600 dark:text-gray-400 mb-4">Exploring how artificial
                                intelligence is transforming our daily routines and workflows.</p>
                            <div
                                class="inline-block px-2 py-1 border border-gray-900 dark:border-gray-500/50  bg-gray-100 dark:bg-gray-800 rounded text-xs mb-4">
                                Technology</div>
                            <div class="flex items-center justify-between">
                                <span class="text-xs text-gray-600 dark:text-gray-400">John Doe</span>
                                <span class="text-xs text-gray-500">Oct 15, 2025 - 4 min read</span>
                            </div>
                        </div>
                    </div>
                </article>


                <!-- Article 2 -->
                <article class="group cursor-pointer">
                    <div
                        class="overflow-hidden rounded-2xl bg-white dark:bg-gray-900 border border-gray-200 dark:border-gray-800 transition-all duration-300 group-hover:shadow-xl group-hover:-translate-y-2 group-hover:border-gray-300 dark:group-hover:border-gray-700">
                        <div class="aspect-[16/10] overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=600&q=80"
                                alt="Business Growth"
                                class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        </div>
                        <div class="p-5">
                            <div
                                class="inline-block px-2 py-1 bg-green-100 dark:bg-green-900/30 text-green-600 dark:text-green-400 rounded text-xs mb-3">
                                Business</div>
                            <h3
                                class="text-xl font-medium mb-2 group-hover:text-green-600 dark:group-hover:text-green-400 transition-colors">
                                Startup Success Stories</h3>
                            <p class="text-sm text-gray-600 dark:text-gray-400 mb-4">Meet the entrepreneurs disrupting
                                traditional industries with innovative solutions.</p>
                            <div class="flex items-center justify-between">
                                <div class="flex items-center gap-2">
                                    <div class="w-6 h-6 bg-gray-200 dark:bg-gray-800 rounded-full"></div>
                                    <span class="text-xs text-gray-600 dark:text-gray-400">Sarah Lee</span>
                                </div>
                                <span class="text-xs text-gray-500">Oct 14, 2025</span>
                            </div>
                        </div>
                    </div>
                </article>

                <!-- Article 3 -->
                <article class="group cursor-pointer">
                    <div
                        class="overflow-hidden rounded-2xl bg-white dark:bg-gray-900 border border-gray-200 dark:border-gray-800 transition-all duration-300 group-hover:shadow-xl group-hover:-translate-y-2 group-hover:border-gray-300 dark:group-hover:border-gray-700">
                        <div class="aspect-[16/10] overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1492684223066-81342ee5ff30?w=600&q=80"
                                alt="Digital Art"
                                class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        </div>
                        <div class="p-5">
                            <div
                                class="inline-block px-2 py-1 bg-purple-100 dark:bg-purple-900/30 text-purple-600 dark:text-purple-400 rounded text-xs mb-3">
                                Culture</div>
                            <h3
                                class="text-xl font-medium mb-2 group-hover:text-purple-600 dark:group-hover:text-purple-400 transition-colors">
                                Digital Art Renaissance</h3>
                            <p class="text-sm text-gray-600 dark:text-gray-400 mb-4">How NFTs and digital platforms
                                create new opportunities for artists worldwide.</p>
                            <div class="flex items-center justify-between">
                                <div class="flex items-center gap-2">
                                    <div class="w-6 h-6 bg-gray-200 dark:bg-gray-800 rounded-full"></div>
                                    <span class="text-xs text-gray-600 dark:text-gray-400">Mike Chen</span>
                                </div>
                                <span class="text-xs text-gray-500">Oct 13, 2025</span>
                            </div>
                        </div>
                    </div>
                </article>

                <!-- Article 4 -->
                <article class="group cursor-pointer">
                    <div
                        class="overflow-hidden rounded-2xl bg-white dark:bg-gray-900 border border-gray-200 dark:border-gray-800 transition-all duration-300 group-hover:shadow-xl group-hover:-translate-y-2 group-hover:border-gray-300 dark:group-hover:border-gray-700">
                        <div class="aspect-[16/10] overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1451187580459-43490279c0fa?w=600&q=80"
                                alt="Space Exploration"
                                class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        </div>
                        <div class="p-5">
                            <div
                                class="inline-block px-2 py-1 bg-indigo-100 dark:bg-indigo-900/30 text-indigo-600 dark:text-indigo-400 rounded text-xs mb-3">
                                Science</div>
                            <h3
                                class="text-xl font-medium mb-2 group-hover:text-indigo-600 dark:group-hover:text-indigo-400 transition-colors">
                                Space Exploration Milestones</h3>
                            <p class="text-sm text-gray-600 dark:text-gray-400 mb-4">Recent breakthroughs bringing us
                                closer to interplanetary travel than ever before.</p>
                            <div class="flex items-center justify-between">
                                <div class="flex items-center gap-2">
                                    <div class="w-6 h-6 bg-gray-200 dark:bg-gray-800 rounded-full"></div>
                                    <span class="text-xs text-gray-600 dark:text-gray-400">Dr. Maria Chen</span>
                                </div>
                                <span class="text-xs text-gray-500">Oct 12, 2025</span>
                            </div>
                        </div>
                    </div>
                </article>

                <!-- Article 5 -->
                <article class="group cursor-pointer">
                    <div
                        class="overflow-hidden rounded-2xl bg-white dark:bg-gray-900 border border-gray-200 dark:border-gray-800 transition-all duration-300 group-hover:shadow-xl group-hover:-translate-y-2 group-hover:border-gray-300 dark:group-hover:border-gray-700">
                        <div class="aspect-[16/10] overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1579621970563-ebec7560ff3e?w=600&q=80"
                                alt="Health Wellness"
                                class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        </div>
                        <div class="p-5">
                            <div
                                class="inline-block px-2 py-1 bg-teal-100 dark:bg-teal-900/30 text-teal-600 dark:text-teal-400 rounded text-xs mb-3">
                                Health</div>
                            <h3
                                class="text-xl font-medium mb-2 group-hover:text-teal-600 dark:group-hover:text-teal-400 transition-colors">
                                Wellness in the Digital Age</h3>
                            <p class="text-sm text-gray-600 dark:text-gray-400 mb-4">Expert insights on maintaining
                                physical and mental health in our connected world.</p>
                            <div class="flex items-center justify-between">
                                <div class="flex items-center gap-2">
                                    <div class="w-6 h-6 bg-gray-200 dark:bg-gray-800 rounded-full"></div>
                                    <span class="text-xs text-gray-600 dark:text-gray-400">Dr. James Wilson</span>
                                </div>
                                <span class="text-xs text-gray-500">Oct 11, 2025</span>
                            </div>
                        </div>
                    </div>
                </article>

                <!-- Article 6 -->
                <article class="group cursor-pointer">
                    <div
                        class="overflow-hidden rounded-2xl bg-white dark:bg-gray-900 border border-gray-200 dark:border-gray-800 transition-all duration-300 group-hover:shadow-xl group-hover:-translate-y-2 group-hover:border-gray-300 dark:group-hover:border-gray-700">
                        <div class="aspect-[16/10] overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?w=600&q=80"
                                alt="Financial Markets"
                                class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        </div>
                        <div class="p-5">
                            <div
                                class="inline-block px-2 py-1 bg-yellow-100 dark:bg-yellow-900/30 text-yellow-600 dark:text-yellow-400 rounded text-xs mb-3">
                                Business</div>
                            <h3
                                class="text-xl font-medium mb-2 group-hover:text-yellow-600 dark:group-hover:text-yellow-400 transition-colors">
                                Market Trends 2025</h3>
                            <p class="text-sm text-gray-600 dark:text-gray-400 mb-4">Analysis of emerging financial
                                patterns shaping the global economy this year.</p>
                            <div class="flex items-center justify-between">
                                <div class="flex items-center gap-2">
                                    <div class="w-6 h-6 bg-gray-200 dark:bg-gray-800 rounded-full"></div>
                                    <span class="text-xs text-gray-600 dark:text-gray-400">Emma Watson</span>
                                </div>
                                <span class="text-xs text-gray-500">Oct 10, 2025</span>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </section>
@endsection
