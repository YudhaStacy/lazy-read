@extends('layouts.main')

@section('content')
    <!-- Hero Section -->
    <section class="pb-24 mt-20">
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
                LazyRead hadir untuk kamu yang ingin tahu tanpa terburu-buru.
                Kami menyajikan berita dan artikel yang singkat, bermakna, dan menyenangkan untuk dibaca setiap hari.
            </p>

            <a href="#scroll-arrow" id="scroll-arrow"
                class="absolute bottom-25 animate-bounce text-gray-300 hover:text-white transition duration-300">
                <svg class="w-5 h-5 mx-auto" xmlns="http://www.w3.org/2000/svg" width="48" height="48"
                    viewBox="0 0 48 48">
                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="4" d="M36 18L24 30L12 18" />
                </svg>
            </a>
        </div>

    </section>

    <!-- Mission Section -->
    <section class="py-16 px-6">
        <div class="max-w-4xl mx-auto">
            <div class="grid md:grid-cols-2 gap-16 items-center mb-24" data-aos="fade-left" data-aos-duration="1000">
                <div>
                    <h2 class="text-3xl font-medium mb-6">Tujuan Kami</h2>
                    <p class="text-gray-600 dark:text-gray-400 mb-4">
                        Menjadikan kegiatan membaca sebagai kebiasaan yang menyenangkan dan bermanfaat dengan menyajikan
                        informasi yang ringkas, jujur, dan inspiratif.
                    </p>
                    <p class="text-gray-600 dark:text-gray-400">
                        Kami percaya bahwa setiap pembaca berhak mendapatkan konten yang bermutu tanpa harus tenggelam dalam
                        teks yang melelahkan.
                    </p>
                </div>
                <div class="aspect-square bg-gray-100 dark:bg-gray-900 rounded-3xl overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1673553830381-9e88f45bb714?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&q=80&w=1470"
                        alt="Mission" class="w-full h-full object-cover">
                </div>
            </div>

            <div class="grid md:grid-cols-2 gap-16 items-center" data-aos="fade-right" data-aos-duration="1000">
                <div class="order-2 md:order-1 aspect-square bg-gray-100 dark:bg-gray-900 rounded-3xl overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?w=800&q=80" alt="Team"
                        class="w-full h-full object-cover">
                </div>
                <div class="order-1 md:order-2">
                    <h2 class="text-3xl font-medium mb-6">Nilai Kami</h2>
                    <div class="space-y-4">
                        <div>
                            <h3 class="font-medium mb-2">Konten Berkualitas</h3>
                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                Setiap artikel dan berita kami tulis dengan akurat, jelas, dan bermakna — karena pembaca
                                berhak mendapatkan informasi yang dapat dipercaya.
                            </p>
                        </div>

                        <div>
                            <h3 class="font-medium mb-2">Sudut Pandang Seimbang</h3>
                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                Kami menghadirkan beragam perspektif dalam setiap topik, membantu pembaca melihat isu dari
                                berbagai sisi tanpa bias.
                            </p>
                        </div>

                        <div>
                            <h3 class="font-medium mb-2">Mudah Dibaca Semua Orang</h3>
                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                Gaya penulisan kami sederhana dan menarik, agar setiap orang bisa menikmati bacaan yang
                                informatif tanpa merasa berat.
                            </p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Contact Section -->
    {{-- <section class="py-16 px-6 bg-gray-50 dark:bg-gray-950">
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
    </section> --}}
@endsection

@push('scripts')
    <script>
        const arrow = document.getElementById('scroll-arrow');

        window.addEventListener('scroll', () => {
            // Jika scroll melebihi 100px dari atas → hilangkan arrow
            if (window.scrollY > 100) {
                arrow.classList.add('opacity-0', 'pointer-events-none');
            } else {
                arrow.classList.remove('opacity-0', 'pointer-events-none');
            }
        });
    </script>
@endpush
