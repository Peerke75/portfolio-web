<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Portfolio Mees</title>
</head>

<header class="bg-gray-900 text-white">
    <div class="container mx-auto py-4 px-6">
        @include('components.nav-menu')
    </div>
</header>

<body class="font-sans bg-gray-100 text-gray-800">
    <div class="container mx-auto">
        @yield('content')
    </div>
</body>

<footer class="bg-gray-900 text-white py-6 mt-12">
    <div class="container mx-auto text-center">
        <p class="text-sm">&copy; 2024 Portfolio Mees. All rights reserved.</p>
    </div>
</footer>

</html>
