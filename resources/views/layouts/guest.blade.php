<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Noto+Sans+JP:wght@100..900&family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <style>
        .video-background {
            position: fixed;
            right: 0;
            bottom: 0;
            min-width: 100%;
            min-height: 100%;
            width: auto;
            height: auto;
            z-index: -1;
            filter: blur(5px);
            object-fit: cover;
        }
        .content {
            position: relative;
            z-index: 1;
            color: white; /* Optional: Adjust text color for better visibility */
        }
    </style>
</head>
<body class="font-sans text-gray-900 antialiased">
    <!-- Video Background -->
    <video autoplay muted loop class="video-background">
        <source src="/images/Rifa.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>

    <!-- Page Content -->
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 content">
        <div class="w-full sm:max-w-md mt-6 px-8 py-5 bg-gradient-to-br from-amber-300 via-orange-400 to-orange-600 dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg">
            {{ $slot }}
        </div>
    </div>
</body>
</html>
