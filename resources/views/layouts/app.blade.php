<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>

    

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Link untuk preconnect ke Bunny Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Link ke stylesheet lokal -->
    <link rel="stylesheet" href="{{ asset('asset/css/profile.css') }}">

    <link rel="stylesheet" href="{{ asset('asset/css/liststyle.css') }}">

    @yield('css')
</head>

<body class="font-figtree bg-gray-100">
    <div class="container mx-auto">
        <!-- Tempat konten halaman lain akan dirender -->
        @yield('content')
        <script src="..."></script>
    </div>
</body>

</html>
