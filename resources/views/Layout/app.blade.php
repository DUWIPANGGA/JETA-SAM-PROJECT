<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>JETA Konveksi</title>
    <link rel="icon" type="image/svg+xml" href="{{ asset('images/logo.svg') }}">
</head>

<body>
    <div class="bg-[url('/images/bg.png')] w-full min-h-screen bg-repeat bg-[length:50px_50px]">
        @include('layout.partials.navbar')
        @yield('main')
    </div>
</body>

</html>
