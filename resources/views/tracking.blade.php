@extends('Layout.app')

@section('main')
    <!-- HERO / SEARCH SECTION -->
    <div class="w-full relative overflow-hidden pt-10 pb-20">
        <!-- Background Grid handled by Layout.app -->

        <!-- Van Image on Left -->
        <div class="absolute left-0 bottom-0 z-10 w-[500px] md:w-[4700px] lg:w-[670px]">
            <img src="{{ asset('images/section_3_left.svg') }}" class="w-full h-auto object-bottom" alt="Lacak Pesanan Van">
        </div>

        <div class="max-w-7xl mx-auto flex flex-col items-center justify-center min-h-[300px] z-20 relative px-4">
            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-8">Lacak Pesanan</h2>
            <div class="w-full max-w-lg relative">
                <input type="text" value="JTA019231|"
                    class="w-full py-4 pl-6 pr-16 rounded-full border-2 border-gray-300 focus:outline-none focus:border-[#2579F6] text-gray-700 bg-white text-lg shadow-sm">
                <button
                    class="absolute right-2 top-1/2 -translate-y-1/2 w-12 h-12 bg-[#2579F6] text-white rounded-full flex items-center justify-center hover:bg-blue-700 transition-colors shadow-md">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3"
                        stroke="currentColor" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- ZIGZAG DIVIDER -->
    <div
        class="substract-line bg-[url('/images/substract.svg')] bg-repeat-x bg-[length:auto_100%] h-[30px] lg:h-[40px] w-full">
    </div>

    <!-- TRACKING DETAIL CARD -->
    <div class="w-full py-16 px-4 md:px-10 lg:px-20 max-w-[1000px] mx-auto">
        <div class="bg-white border border-gray-200 shadow-sm">
            <!-- LOGO HEADER -->
            <div class="flex justify-center py-6 border-b border-gray-200">
                <div class="scale-90">
                    <x-icons.logo />
                </div>
            </div>

            <!-- CONTENT BODY -->
            <div class="flex flex-col md:flex-row p-8 lg:p-12 gap-10 lg:gap-16">
                <!-- LEFT: DATA CLIENT -->
                <div class="w-full md:w-1/3">
                    <h3 class="text-xl md:text-2xl font-semibold mb-6 pb-4 border-b border-gray-200 text-gray-800">Data
                        Client</h3>

                    <div class="flex flex-col gap-1.5 text-gray-800 text-[15px]">
                        <div class="font-bold text-gray-900">Mike Raphone</div>
                        <div>(+62) 888-888-8888</div>
                        <div>Mikeraphone@gmail.com</div>
                        <div class="italic text-gray-600 mt-2 leading-relaxed text-sm">
                            Politeknik Indramayu, Jalan Raya Lohbener<br>
                            Lama No. 08 Indramayu, Indramayu, Jawa<br>
                            Barat, Indonesia, 45252
                        </div>
                    </div>
                </div>

                <!-- RIGHT: STATUS PESANAN -->
                <div class="w-full md:w-2/3">
                    <div
                        class="flex flex-col sm:flex-row sm:justify-between sm:items-end mb-6 pb-4 border-b border-gray-200 gap-2">
                        <h3 class="text-xl md:text-2xl font-semibold text-gray-800">Status Pesanan</h3>
                        <div class="text-gray-600 flex items-center gap-2 text-sm md:text-base">
                            <span>No : JTA019231</span>
                            <button class="hover:text-blue-600 focus:outline-none">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15.75 17.25v3.375c0 .621-.504 1.125-1.125 1.125h-9.75a1.125 1.125 0 01-1.125-1.125V7.875c0-.621.504-1.125 1.125-1.125H6.75a9.06 9.06 0 011.5.124m7.5 10.376h3.375c.621 0 1.125-.504 1.125-1.125V11.25c0-4.46-3.243-8.161-7.5-8.876a9.06 9.06 0 00-1.5-.124H9.375c-.621 0-1.125.504-1.125 1.125v3.5m7.5 10.375H9.375a1.125 1.125 0 01-1.125-1.125v-9.25m12 6.625v-1.875a3.375 3.375 0 00-3.375-3.375h-1.5a1.125 1.125 0 01-1.125-1.125v-1.5a3.375 3.375 0 00-3.375-3.375H9.75" />
                                </svg>
                            </button>
                        </div>
                    </div>

                    <!-- Timeline -->
                    <div class="flex flex-col gap-4 text-[13px] md:text-sm text-gray-600 relative ml-2">
                        <!-- Vertical line for timeline -->
                        <div class="absolute left-[7px] top-2 bottom-4 w-[2px] bg-gray-200 -z-10"></div>

                        @php
                            $statuses = [
                                ['date' => '10-04-2026 12:00', 'text' => 'Memasuki fase desain', 'bold' => true],
                                [
                                    'date' => '10-04-2026 12:00',
                                    'text' => 'Selesai membuat mockup desain',
                                    'bold' => false,
                                ],
                                ['date' => '10-04-2026 12:00', 'text' => 'Selesai melakukan revisi', 'bold' => false],
                                ['date' => '10-04-2026 12:00', 'text' => 'Selesai melakukan revisi', 'bold' => false],
                                ['date' => '10-04-2026 12:00', 'text' => 'Finalisasi desain', 'bold' => false],
                                ['date' => '10-04-2026 12:00', 'text' => 'Memasuki fase produksi', 'bold' => true],
                                [
                                    'date' => '10-04-2026 12:00',
                                    'text' => 'Memproses printing dan cutting',
                                    'bold' => false,
                                ],
                                [
                                    'date' => '10-04-2026 12:00',
                                    'text' => 'Memproses printing dan cutting',
                                    'bold' => false,
                                ],
                                ['date' => '10-04-2026 12:00', 'text' => 'Melakukan quality control', 'bold' => false],
                                ['date' => '10-04-2026 12:00', 'text' => 'Memproses packing', 'bold' => false],
                                ['date' => '10-04-2026 12:00', 'text' => 'Pesanan sudah diterima', 'bold' => true],
                            ];
                        @endphp

                        @foreach ($statuses as $status)
                            <div class="flex items-start gap-4">
                                <div
                                    class="w-4 h-4 rounded-full bg-gray-300 mt-0.5 border-2 border-white flex-shrink-0 relative z-10">
                                </div>
                                <div class="w-[120px] md:w-[140px] flex-shrink-0 italic text-gray-400">{{ $status['date'] }}
                                </div>
                                <div class="{{ $status['bold'] ? 'font-bold text-gray-800' : 'text-gray-600' }}">
                                    {{ $status['text'] }}</div>
                            </div>
                        @endforeach
                    </div>

                    <div class="mt-6 italic text-[#2579F6] text-sm font-medium ml-10">
                        Estimasi selesai 14 - 15 april
                    </div>
                </div>
            </div>

            <!-- CARD FOOTER (Button) -->
            <div class="flex justify-center py-8 border-t border-gray-200">
                <button
                    class="flex items-center gap-2 bg-[#2579F6] hover:bg-blue-600 text-white font-medium py-2.5 px-6 rounded-full shadow-sm shadow-blue-500/50 transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 20.25c4.97 0 9-3.694 9-8.25s-4.03-8.25-9-8.25S3 7.444 3 12c0 2.104.859 4.023 2.273 5.48.432.447.74 1.04.586 1.641a4.483 4.483 0 01-.923 1.785A5.969 5.969 0 006 21c1.282 0 2.47-.402 3.445-1.087.81.22 1.668.337 2.555.337z" />
                    </svg>
                    Hubungi Kami
                </button>
            </div>
        </div>
    </div>
@endsection
