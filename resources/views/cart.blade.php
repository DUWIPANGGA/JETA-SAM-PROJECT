@extends('Layout.app')

@section('main')
    <div class="flex items-start justify-center min-h-[calc(100vh-4rem)] w-full py-10 px-4 md:px-10 lg:px-20">
        <div class="bg-white border border-gray-200 w-full max-w-5xl shadow-sm">
            <!-- LOGO HEADER -->
            <div class="flex justify-center py-6 border-b border-gray-200">
                <div class="scale-90">
                    <x-icons.logo />
                </div>
            </div>

            <!-- PRODUCT LIST -->
            <div class="flex flex-col">
                @for ($i = 0; $i < 4; $i++)
                    <!-- Product Item -->
                    <div class="flex flex-col md:flex-row items-center p-6 lg:px-12 lg:py-8 border-b border-gray-200 gap-6">
                        <!-- Remove Icon -->
                        <button class="text-gray-400 hover:text-red-500 transition-colors hidden md:block">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </button>

                        <div class="flex flex-1 items-center gap-6 w-full md:w-auto">
                            <!-- Mobile Remove Icon -->
                            <button class="text-gray-400 hover:text-red-500 transition-colors md:hidden">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </button>

                            <!-- Product Image -->
                            <div
                                class="w-24 h-24 bg-[#1A1A1A] rounded-md overflow-hidden flex-shrink-0 flex items-center justify-center p-2 relative shadow-sm border border-gray-800">
                                <!-- text overlay -->
                                <div
                                    class="absolute top-1 left-1 text-white font-black text-[9px] leading-tight tracking-wider">
                                    STRIPE<br>SERIES</div>
                                <img src="{{ asset('images/shirt_1.svg') }}" alt="Product"
                                    class="w-full h-full object-contain mt-2">
                            </div>

                            <!-- Product Details -->
                            <div class="flex flex-col flex-1 justify-center h-full">
                                <div class="font-bold text-gray-900 mb-2">Product Name</div>
                                <div class="flex gap-2">
                                    <span
                                        class="border border-gray-300 text-gray-600 px-2 py-0.5 rounded-sm text-sm">Stripe</span>
                                    <span
                                        class="border border-gray-300 text-gray-600 px-2 py-0.5 rounded-sm text-sm">XL</span>
                                </div>
                            </div>
                        </div>

                        <!-- Quantity & Price -->
                        <div class="flex w-full md:w-auto justify-between md:justify-end md:gap-16 lg:gap-24 items-start">
                            <div class="flex flex-col items-center min-w-[80px]">
                                <div class="font-bold text-gray-900 mb-3">Quantity</div>
                                <div class="text-gray-700 text-sm">x1</div>
                            </div>
                            <div class="flex flex-col items-center md:items-end min-w-[100px]">
                                <div class="font-bold text-gray-900 mb-3">Price</div>
                                <div class="text-gray-700 text-sm">Rp 999.000</div>
                            </div>
                        </div>
                    </div>
                @endfor
            </div>

            <!-- TOTAL & CHECKOUT -->
            <div class="p-8 lg:p-12 flex flex-col md:flex-row justify-between items-center md:items-end gap-6 bg-white">
                <div class="font-bold text-gray-900 text-lg mb-2 md:mb-0 md:pb-4">
                    Total Harga
                </div>
                <div class="flex flex-col items-end gap-4">
                    <div class="text-3xl font-bold text-gray-900 mb-1">
                        Rp 999.000
                    </div>
                    <button
                        class="bg-[#2579F6] hover:bg-blue-600 text-white font-medium py-2.5 px-10 rounded-full shadow-sm shadow-blue-500/50 transition-colors text-base">
                        Check out
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection
