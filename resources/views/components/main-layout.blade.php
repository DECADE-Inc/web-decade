<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    @vite('resources/css/glide.core.min.css')
    <title>{{ $title }}</title>
</head>

<body class="dark:bg-black">
    <x-navbar />
    {{ $slot }}
    <x-footer />
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
</body>
@vite('resources/js/main.js')
@vite('resources/js/glide.min.js')

</html>