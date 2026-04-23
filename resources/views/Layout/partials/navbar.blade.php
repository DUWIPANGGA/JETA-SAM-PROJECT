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
            <ul class="flex items-center gap-4" 
                x-data="{ isLogged: false }" 
                x-init="isLogged = (localStorage.getItem('jwt_token') !== null)">

                <li x-show="!isLogged">
                    <a href="{{ route('login') }}" class="text-gray-600 hover:text-blue-600">
                        <x-icons.account />
                    </a>
                </li>
            
                <li x-show="isLogged">
                    <a href="{{ url('/cart') }}" class="text-gray-600 hover:text-green-600">
                        <x-icons.cart />
                    </a>
                </li>
            
                <li x-show="isLogged" class="flex flex-col py-0">
                    <button id="btn-logout" class="text-gray-600 hover:text-red-600">
                        {{-- <x-icons.logout /> --}}
                        <p class="text-[0.8rem]">
                            Logout
                        </p>
                    </button>
                </li>
            
            </ul>

        </div>
    </ul>
</div>
<script src="{{ asset('js/auth.js') }}"></script>
