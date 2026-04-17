<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <title></title>
</head>
<body>
    <div class="border border-b-black bg-white w-full h-16 flex items-center sticky top-0">
        <ul class="w-full list-none flex items-center justify-around">
            <div class="flex ">
                <li>
                    <x-icons.logo />
                </li>
            </div>
            <div class="flex lg:gap-10 md:gap-5 gap-2 lg:mx-10 md:mx-5 mx-2">
                <li><a href="#">Beranda</a></li>
                <li><a href="#">Produk</a></li>
                <li><a href="#">Lacak Pesanan</a></li>
                <li><a href="#">Tentang</a></li>
                <li><a href="#">Portofolio</a></li>
                <li><a href="#">Hubungi Kami</a></li>
            </div>
            <div class="flex">
                <li>
                    <x-icons.account />
                </li>
                <li>
                    <x-icons.cart />
                </li>
            </div>
        </ul>
    </div>
</body>
</html>