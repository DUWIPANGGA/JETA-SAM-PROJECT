<?php $__env->startSection('main'); ?>
    <style>
        .hide-scrollbar::-webkit-scrollbar {
            display: none;
        }

        .hide-scrollbar {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
    </style>

    <!-- HERO SECTION -->
    <div class="min-h-[90vh] flex items-center justify-center relative overflow-hidden pt-10 pb-20">
        <div class="hidden md:block absolute left-[-50px] lg:left-[5%] top-1/2 -translate-y-1/2 z-10">
            <img src="<?php echo e(asset('images/shirt_1.svg')); ?>" alt="Gambar Baju" class="w-[250px] lg:w-[350px]">
        </div>

        <div class="flex flex-col items-center justify-center gap-8 w-full max-w-3xl z-20 px-4">
            <div class="text-center text-5xl md:text-6xl lg:text-7xl font-bold text-gray-900 leading-tight">
                Jersey Custom <br>Berkualitas
            </div>
            <div class="text-center text-gray-600 max-w-2xl text-lg lg:text-xl">
                Dari tim komunitas sampai klub kompetitif, kami produksi jersey yang sesuai identitas
                tim Anda. Bahan tahan lama, cetak presisi, dan kualitas konsisten di setiap produksi.
            </div>
            <div class="flex flex-col sm:flex-row gap-4 sm:gap-6 mt-4">
                <button
                    class="flex items-center justify-center text-white px-8 py-1 gap-2 w-[205px] h-[50px] bg-[#2579F6] rounded-full flex-none shadow-[0px_4px_10px_rgba(31,40,50,0.2),0px_2px_4px_rgba(31,40,50,0.2),inset_0px_-2px_2px_rgba(83,83,83,0.4),inset_0px_2px_2px_rgba(255,255,255,0.5)] hover:scale-105 transition-transform font-semibold">
                    Cek Daftar Produk
                </button>
                <button
                    class="flex items-center justify-center text-gray-800 px-8 py-1 gap-2 w-[205px] h-[50px] bg-white border border-gray-300 rounded-full flex-none shadow-sm hover:bg-gray-50 transition-colors font-semibold">
                    Hubungi Kami
                </button>
            </div>
        </div>

        <div class="hidden md:block absolute right-[-50px] lg:right-[5%] top-1/2 -translate-y-1/2 z-10">
            <img src="<?php echo e(asset('images/shirt_2.svg')); ?>" alt="Gambar Baju" class="w-[200px] lg:w-[300px]">
        </div>
    </div>

    <!-- SECTION 2: BANNERS -->
    <div class="w-full relative z-10">
        <div
            class="substract-line bg-[url('/images/substract.svg')] bg-repeat-x bg-[length:auto_100%] h-[30px] lg:h-[40px] w-full">
        </div>
        <div
            class="bg-[url('/images/bg-2-section.png')] w-full h-[400px] md:h-[500px] lg:h-[60vh] bg-cover bg-no-repeat bg-center relative flex items-end ">
            <!-- TEXT -->
            <div
                class="bg-[url('/images/jeta_text_line.svg')] w-full h-[15vh] lg:h-[20vh] bg-contain bg-repeat-x bg-bottom absolute bottom-0 left-0">
            </div>

            <!-- IMAGE -->
            <div
                class="bg-[url('/images/person.svg')] w-full max-w-[800px] h-[120%] bg-contain bg-no-repeat bg-bottom absolute right-0 bottom-0 md:right-10 lg:right-20">
            </div>

            <!-- BLUE BUTTON ARROW ON RIGHT -->
            <div class="absolute right-4 md:right-10 top-1/2 -translate-y-1/2 z-20">
                <button
                    class="w-12 h-12 md:w-14 md:h-14 bg-[#2579F6] text-white rounded-full flex items-center justify-center shadow-[0px_4px_10px_rgba(31,40,50,0.2),inset_0px_-2px_2px_rgba(83,83,83,0.4),inset_0px_2px_2px_rgba(255,255,255,0.5)] hover:scale-110 transition-transform">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                    </svg>
                </button>
            </div>
        </div>
        <div
            class="substract-line bg-[url('/images/substract.svg')] bg-repeat-x bg-[length:auto_100%] h-[30px] lg:h-[40px] w-full">
        </div>
    </div>

    <!-- SECTION 3: KOLEKSI PRODUK -->
    <div class="w-full py-16 px-0 max-w-7xl">
        <h2 class="text-3xl px-4 md:px-10 lg:px-20 lg:text-4xl font-bold mb-8 text-gray-900">Koleksi Produk</h2>

        <div class="flex gap-4 md:gap-6 overflow-x-auto pb-8 snap-x hide-scrollbar w-screen">
            <!-- Card -->
            <?php for($i = 0; $i < 6; $i++): ?>
                <div
                    class="min-w-[200px] md:min-w-[240px] w-[200px] md:w-[240px] bg-white flex-shrink-0 snap-center group cursor-pointer border border-gray-300">
                    <div class="h-[240px] md:h-[280px] w-full relative overflow-hidden bg-gray-100">
                        <!-- Product Image -->
                        <img src="<?php echo e(asset('images/product_demo.jpg')); ?>"
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                            alt="Product">
                    </div>
                    <div class="px-4 py-4">
                        <div class="text-gray-800 text-lg font-normal mb-1">Product Name</div>
                        <div class="text-[#2B303A] font-normal text-2xl lg:text-3xl tracking-tight mt-1">Rp. 200.000</div>
                    </div>
                </div>
            <?php endfor; ?>
        </div>
    </div>

    <!-- SECTION 4: LACAK PESANAN -->
    <div class="w-full h-[500px] relative overflow-hidden">

        <!-- LEFT IMAGE (pojok kiri bawah) -->
        <div class="absolute bottom-0 left-0 z-10">
            <img src="<?php echo e(asset('images/section_3_left.svg')); ?>" class="w-full max-w-[1000px] object-contain">
        </div>

        <!-- CENTER CONTENT -->
        <div class="w-full h-full flex items-center justify-center">
            <div class="flex flex-col items-center text-center px-4">

                <h2 class="text-4xl lg:text-5xl font-bold mb-8 text-gray-900">
                    Lacak Pesanan
                </h2>

                <div class="w-full max-w-md relative">
                    <input type="text" placeholder="Ketik nomor pesanan anda disini"
                        class="w-full py-4 pl-6 pr-16 rounded-full border-2 border-gray-100 focus:outline-none focus:border-[#2579F6] shadow-sm text-gray-700 bg-white">

                    <button
                        class="absolute right-2 top-1/2 -translate-y-1/2 w-12 h-12 bg-[#2579F6] text-white rounded-full flex items-center justify-center hover:bg-blue-700 transition-colors shadow-md">

                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5"
                            stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                        </svg>

                    </button>
                </div>

            </div>
        </div>

    </div>

    <div class="w-full">

        <!-- TOP LINE -->
        <div
            class="substract-line bg-[url('/images/substract.svg')] bg-repeat-x bg-[length:auto_100%] h-[30px] lg:h-[40px] w-full">
        </div>

        <!-- MAIN SECTION -->
        <div
            class="relative min-h-[500px] md:min-h-[600px] flex items-center justify-center px-4 md:px-10 lg:px-20 overflow-hidden">

            <!-- IMAGE (LEFT ABSOLUTE) -->
            <div class="absolute left-5 bottom-0 z-10">
                <img src="<?php echo e(asset('images/person_2.svg')); ?>" alt="Mengapa memilih Jeta"
                    class="w-[220px] md:w-[300px] lg:w-[420px] object-contain">
            </div>

            <!-- CONTENT (CENTER SCREEN) -->
            <div class="w-full max-w-xl flex flex-col items-center text-center z-20 ">

                <h2 class="text-4xl lg:text-5xl font-bold mb-4 text-gray-900">
                    Mengapa memilih Jeta?
                </h2>

                <p class="text-gray-600 mb-10">
                    Jelajahi seluruh koleksi premium dan custom kami untuk menemukan
                    penawaran terbaik.
                </p>

                <div class="flex flex-col gap-4 w-full">

                    <!-- Item 1 -->
                    <div
                        class="bg-[#2579F6] text-white rounded-[40px] py-4 px-6 flex items-center shadow-lg hover:-translate-y-1 transition-transform">
                        <div class="bg-white/20 p-3 rounded-lg mr-4 shrink-0">
                            <i class="fa-solid fa-gem text-white text-lg"></i>
                        </div>
                        <div class="text-left">
                            <div class="font-bold text-lg leading-tight mb-1">Kualitas Premium</div>
                            <div class="text-sm text-blue-100/90 leading-snug">
                                Barang tahan lama dan dicetak presisi secara mendetail.
                            </div>
                        </div>
                    </div>

                    <!-- Item 2 -->
                    <div
                        class="bg-[#2579F6] text-white rounded-[40px] py-4 px-6 flex items-center shadow-lg hover:-translate-y-1 transition-transform">
                        <div class="bg-white/20 p-3 rounded-lg mr-4 shrink-0">
                            <i class="fa-solid fa-bolt text-white text-lg"></i>
                        </div>
                        <div class="text-left">
                            <div class="font-bold text-lg leading-tight mb-1">Proses Cepat</div>
                            <div class="text-sm text-blue-100/90 leading-snug">
                                Target waktu selesai yang efisien dan bisa diandalkan.
                            </div>
                        </div>
                    </div>

                    <!-- Item 3 -->
                    <div
                        class="bg-[#2579F6] text-white rounded-[40px] py-4 px-6 flex items-center shadow-lg hover:-translate-y-1 transition-transform">
                        <div class="bg-white/20 p-3 rounded-lg mr-4 shrink-0">
                            <i class="fa-solid fa-pen-ruler text-white text-lg"></i>
                        </div>
                        <div class="text-left">
                            <div class="font-bold text-lg leading-tight mb-1">Desain Bebas</div>
                            <div class="text-sm text-blue-100/90 leading-snug">
                                Kreasikan ide dan warna tim ke dalam jersey impian.
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>

        <!-- BOTTOM LINE -->
        <div
            class="substract-line bg-[url('/images/substract.svg')] bg-repeat-x bg-[length:auto_100%] h-[30px] lg:h-[40px] w-full">
        </div>

    </div>

    <!-- SECTION 6: APA PENDAPAT ORANG -->
    <div
        class="w-full pt-20 pb-0 px-4 md:px-10 lg:px-20 max-w-7xl mx-auto flex flex-col md:flex-row items-end justify-center gap-10 lg:gap-16">
        <!-- LEFT: Phone Image -->
        <div class="w-full md:w-1/2 flex justify-center md:justify-end relative z-10">
            <img src="<?php echo e(asset('images/mobile_phone_section_4.svg')); ?>" alt="Testimoni"
                class="w-full max-w-[350px] lg:max-w-[480px] object-bottom">
        </div>

        <!-- RIGHT: Text and Person -->
        <div
            class="w-full md:w-1/2 flex flex-col items-center md:items-start text-center md:text-left relative mt-10 md:mt-0 ml-5">
            <h2
                class="text-4xl lg:text-5xl xl:text-6xl font-bold text-gray-900 mb-10 leading-tight z-10 md:-ml-8 lg:-ml-16">
                Apa pendapat orang <br> tentang kami?
            </h2>

            <img src="<?php echo e(asset('images/person_3.svg')); ?>" alt="Pendapat Orang"
                class="w-[80%] max-w-[500px] lg:max-w-[700px] md:mt-4 object-bottom">
        </div>
    </div>

    <div
        class="substract-line bg-[url('/images/substract.svg')] bg-repeat-x bg-[length:auto_100%] h-[30px] lg:h-[40px] w-full">
    </div>

    <!-- SECTION 7: CALL TO ACTION -->
    <div class="w-full py-20 flex flex-col items-center justify-center text-center relative overflow-hidden h-[50vh]">
        <h2
            class="text-4xl lg:text-5xl font-bold text-gray-900 mb-10 flex flex-col sm:flex-row items-center justify-center gap-3">
            <span>Siap hubungi</span>
            <img src="<?php echo e(asset('images/jeta_logo_text.svg')); ?>" alt="Jeta Logo" class="h-10 lg:h-12 mt-2 sm:mt-0">
            <span>?</span>
        </h2>
        <button
            class="flex items-center justify-center text-white px-10 py-1 gap-2 w-[220px] h-[50px] bg-[#2579F6] rounded-full flex-none shadow-[0px_4px_10px_rgba(31,40,50,0.2),0px_2px_4px_rgba(31,40,50,0.2),inset_0px_-2px_2px_rgba(83,83,83,0.4),inset_0px_2px_2px_rgba(255,255,255,0.5)] hover:scale-105 transition-transform text-lg font-semibold">
            Hubungi Kami
        </button>

        <!-- Left/right diagonal decorations starting from vertical middle -->
        <div
            class="absolute top-1/2 -translate-y-1/2 -left-12 w-full md:w-full h-[40px] bg-[url('/images/substract.svg')] bg-repeat-x bg-[length:auto_100%] transform rotate-45  origin-left">
        </div>
        <div
            class="absolute top-1/2 -translate-y-1/2 -right-12 w-full md:w-full h-[40px] bg-[url('/images/substract.svg')] bg-repeat-x bg-[length:auto_100%] transform -rotate-45 origin-right">
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Layout.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH E:\Julian\magang\JETA-SAM-PROJECT\resources\views/welcome.blade.php ENDPATH**/ ?>