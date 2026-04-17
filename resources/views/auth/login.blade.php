@extends('Layout.app')

@section('user_dashboard')
    <div class="flex items-center justify-center min-h-[calc(100vh-4rem)] w-full pt-10 pb-20">
        <div class="bg-white border border-gray-200 px-8 py-10 w-[420px]">
            <div class="relative flex justify-center items-center mb-8">
                <a href="#" class="absolute left-0 text-sm text-gray-600 flex items-center hover:text-gray-900">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                    Kembali
                </a>
                <div class="-mt-1 scale-90">
                    <x-icons.logo />
                </div>
            </div>

            <form action="#" method="POST" class="mt-8">
                <div class="mb-5">
                    <label for="email" class="block text-gray-700 text-base mb-2">Email</label>
                    <input type="email" id="email" name="email" placeholder="Example@email.com"
                        class="w-full border border-gray-600 text-gray-700 rounded-full px-5 py-2.5 focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500 text-sm placeholder-gray-300">
                </div>

                <div class="mb-4">
                    <label for="password" class="block text-gray-700 text-base mb-2">Kata Sandi</label>
                    <div class="relative">
                        <input type="password" id="password" name="password" placeholder="********"
                            class="w-full border border-gray-600 text-gray-700 rounded-full pl-5 pr-12 py-2.5 focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500 text-sm tracking-widest placeholder-gray-300 placeholder:tracking-widest">
                        <button type="button" class="absolute inset-y-0 right-0 flex items-center pr-5 outline-none">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="w-5 h-5 text-gray-700">
                                <path d="M12 15a3 3 0 100-6 3 3 0 000 6z" />
                                <path fill-rule="evenodd"
                                    d="M1.323 11.447C2.811 6.976 7.028 3.75 12.001 3.75c4.97 0 9.185 3.223 10.675 7.69.12.362.12.752 0 1.113-1.487 4.471-5.705 7.697-10.677 7.697-4.97 0-9.186-3.223-10.675-7.69a1.762 1.762 0 010-1.113zM17.25 12a5.25 5.25 0 11-10.5 0 5.25 5.25 0 0110.5 0z"
                                    clip-rule="evenodd" />
                            </svg>
                        </button>
                    </div>
                </div>

                <div class="flex items-center justify-between mb-8 mt-5">
                    <label class="flex items-center text-sm text-gray-600 cursor-pointer">
                        <input type="checkbox"
                            class="mr-2 w-4 h-4 rounded border-gray-400 text-blue-500 focus:ring-blue-500 cursor-pointer">
                        Ingat akun saya
                    </label>
                    <a href="#" class="text-sm text-[#3b82f6] hover:text-blue-700 italic">Lupa Password?</a>
                </div>

                <hr class="border-gray-100 mb-8 mt-2 -mx-8">

                <button type="submit"
                    class="bg-[#2563eb] hover:bg-blue-700 text-white rounded-full px-6 py-2.5 text-sm font-medium flex items-center justify-center mb-8 shadow-sm shadow-blue-500/50">
                    Login
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5"
                        stroke="currentColor" class="w-4 h-4 ml-1">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                    </svg>
                </button>

                <div class="text-sm text-gray-700 italic">
                    Belum punya akun? <a href="/register" class="text-[#3b82f6] hover:text-blue-700">Registrasi sekarang</a>
                </div>
            </form>
        </div>
    </div>
@endsection
