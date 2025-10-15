<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LazyRead</title>
    @vite('resources/css/app.css')
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Geist:wght@100..900&display=swap');

        html,
        * {
            font-family: 'Geist', sans-serif;
            scroll-behavior: smooth
        }
    </style>

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

</head>

<body class="bg-white dark:bg-[#05060b] text-gray-900 dark:text-white">
    @include('partials.navbar')

    <section class="pt-32 pb-16 px-6">
        <div class="max-w-6xl mx-auto">
            @yield('content')
        </div>
    </section>

    @include('partials.footer')


    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init()
    </script>

    @stack('scripts')
</body>

</html>
