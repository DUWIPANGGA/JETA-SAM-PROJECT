<div class="border border-b-black bg-white w-full h-16 flex items-center sticky top-0 z-50">
    <ul class="w-full list-none flex items-center justify-around">
        <div class="flex ">
            <li>
                <a href="{{ route('dashboard') }}">
                    <x-icons.logo />
                </a>
            </li>
        </div>
        <div class="flex lg:gap-10 md:gap-5 gap-2 lg:mx-10 md:mx-5 mx-2">
            <li><a href="{{ url('/') }}">Beranda</a></li>
            <li><a href="#">Produk</a></li>
            <li><a href="{{ url('/tracking') }}">Lacak Pesanan</a></li>
            <li><a href="#">Tentang</a></li>
            <li><a href="{{ url('/portfolio') }}">Portofolio</a></li>
            <li><a href="{{ url('/request') }}">Hubungi Kami</a></li>
        </div>
        <div class="flex">
            <li>
                <a href="{{ route('login') }}">
                    <x-icons.account />
                </a>
            </li>

            <li x-data="{ showCart: false }" x-init="showCart = (localStorage.getItem('user_data') !== null)" :class="showCart ? 'block' : 'hidden'">
                <a href="{{ url('/cart') }}">
                    <x-icons.cart />
                </a>
            </li>

        </div>
    </ul>
</div>
