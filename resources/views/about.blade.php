@extends('layouts.main')

@section('content')
    <!-- Hero Section -->
    <section class="pt-52 pb-24 px-6">
        <div class="max-w-4xl mx-auto text-center ">

            <div class="flex flex-col justify-center items-center gap-8">
                <svg class="h-auto w-24 fill-black dark:fill-white" xmlns="http://www.w3.org/2000/svg" width="24"
                    height="24" viewBox="0 0 24 24">
                    <path
                        d="M13.343 2A6 6 0 0 0 21 9.657V21a1 1 0 0 1-1 1H6.5A3.5 3.5 0 0 1 3 18.5V5a3 3 0 0 1 3-3zM6.5 17a1.5 1.5 0 0 0 0 3H19v-3zM18.53.33a.507.507 0 0 1 .94 0l.254.61a4.37 4.37 0 0 0 2.25 2.327l.718.32a.53.53 0 0 1 0 .962l-.76.338a4.36 4.36 0 0 0-2.218 2.25l-.247.566a.506.506 0 0 1-.934 0l-.246-.565a4.36 4.36 0 0 0-2.22-2.251l-.76-.338a.53.53 0 0 1 0-.963l.718-.32A4.37 4.37 0 0 0 18.276.942z" />
                </svg>
                <h1 class="text-5xl md:text-6xl font-medium mb-6 leading-tight">
                    Tentang LazyRead
                </h1>
            </div>


            <p class="text-xl text-gray-600 dark:text-gray-400 max-w-2xl mx-auto">
                We're on a mission to deliver quality journalism that matters, keeping you informed about the stories
                shaping our world.
            </p>
        </div>
    </section>

    <!-- Mission Section -->
    <section class="py-16 px-6">
        <div class="max-w-4xl mx-auto">
            <div class="grid md:grid-cols-2 gap-16 items-center mb-24">
                <div>
                    <h2 class="text-3xl font-medium mb-6">Our Mission</h2>
                    <p class="text-gray-600 dark:text-gray-400 mb-4">
                        NewsHub was founded on the belief that everyone deserves access to reliable, well-researched
                        journalism. In an age of information overload, we cut through the noise to bring you stories
                        that truly matter.
                    </p>
                    <p class="text-gray-600 dark:text-gray-400">
                        We're committed to maintaining the highest standards of editorial integrity, accuracy, and
                        transparency in everything we publish.
                    </p>
                </div>
                <div class="aspect-square bg-gray-100 dark:bg-gray-900 rounded-3xl overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1504711434969-e33886168f5c?w=800&q=80" alt="Mission"
                        class="w-full h-full object-cover">
                </div>
            </div>

            <div class="grid md:grid-cols-2 gap-16 items-center">
                <div class="order-2 md:order-1 aspect-square bg-gray-100 dark:bg-gray-900 rounded-3xl overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?w=800&q=80" alt="Team"
                        class="w-full h-full object-cover">
                </div>
                <div class="order-1 md:order-2">
                    <h2 class="text-3xl font-medium mb-6">Our Values</h2>
                    <div class="space-y-4">
                        <div>
                            <h3 class="font-medium mb-2">Integrity First</h3>
                            <p class="text-sm text-gray-600 dark:text-gray-400">We fact-check rigorously and correct
                                mistakes promptly.</p>
                        </div>
                        <div>
                            <h3 class="font-medium mb-2">Independent Voice</h3>
                            <p class="text-sm text-gray-600 dark:text-gray-400">Our editorial decisions are never
                                influenced by advertisers or sponsors.</p>
                        </div>
                        <div>
                            <h3 class="font-medium mb-2">Diverse Perspectives</h3>
                            <p class="text-sm text-gray-600 dark:text-gray-400">We amplify voices from all backgrounds
                                and viewpoints.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Contact Section -->
    <section class="py-16 px-6 bg-gray-50 dark:bg-gray-950">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-3xl font-medium mb-4">Get in Touch</h2>
            <p class="text-gray-600 dark:text-gray-400 mb-8">
                Have a story tip or want to work with us? We'd love to hear from you.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="mailto:hello@newshub.com"
                    class="px-6 py-3 bg-black dark:bg-white text-white dark:text-black text-sm rounded-full hover:opacity-80">
                    Contact Us
                </a>
                <a href="#"
                    class="px-6 py-3 border border-gray-300 dark:border-gray-700 text-sm rounded-full hover:bg-gray-100 dark:hover:bg-gray-900">
                    Join Our Team
                </a>
            </div>
        </div>
    </section>
@endsection
