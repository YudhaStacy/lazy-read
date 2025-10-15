<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NewsHub - Stay Informed</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Geist:wght@100..900&display=swap');

        * {
            font-family: 'Geist', sans-serif;
        }
    </style>
</head>

<body class="bg-white dark:bg-black text-gray-900 dark:text-white">
    @include('partials.navbar')

    @yield('content')

    @include('partials.footer')
</body>

</html>
