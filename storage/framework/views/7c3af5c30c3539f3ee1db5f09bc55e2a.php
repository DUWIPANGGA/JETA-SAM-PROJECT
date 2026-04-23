<?php $__env->startSection('main'); ?>
    <div class="flex flex-col items-center justify-center min-h-[calc(100vh-4rem)] w-full py-10 px-4 md:px-10 lg:px-20 relative">
        <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-gray-900 mb-8 text-center tracking-tight">Form Request Konveksi</h1>
        
        <div class="bg-white border border-gray-200 w-full max-w-3xl shadow-sm">
            <!-- LOGO HEADER -->
            <div class="flex justify-center py-6 border-b border-gray-200">
                <div class="scale-90">
                    <?php if (isset($component)) { $__componentOriginalb1d76caee4a8fe9b22aa99d46c64b51c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb1d76caee4a8fe9b22aa99d46c64b51c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.icons.logo','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('icons.logo'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb1d76caee4a8fe9b22aa99d46c64b51c)): ?>
<?php $attributes = $__attributesOriginalb1d76caee4a8fe9b22aa99d46c64b51c; ?>
<?php unset($__attributesOriginalb1d76caee4a8fe9b22aa99d46c64b51c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb1d76caee4a8fe9b22aa99d46c64b51c)): ?>
<?php $component = $__componentOriginalb1d76caee4a8fe9b22aa99d46c64b51c; ?>
<?php unset($__componentOriginalb1d76caee4a8fe9b22aa99d46c64b51c); ?>
<?php endif; ?>
                </div>
            </div>

            <!-- FORM BODY -->
            <form action="#" method="POST" class="p-8 lg:p-12">
                <!-- DATA CLIENT -->
                <div class="mb-10">
                    <h3 class="text-xl md:text-2xl font-medium text-gray-800 mb-4 pb-2 border-b border-gray-200">Data Client</h3>
                    
                    <div class="flex flex-col md:flex-row gap-6 mb-6">
                        <div class="flex-1">
                            <label for="name" class="block text-gray-800 font-bold mb-2 text-[15px]">Nama Lengkap*</label>
                            <input type="text" id="name" name="name" placeholder="Nama anda" class="w-full border border-gray-600 rounded-full px-5 py-2.5 focus:outline-none focus:border-blue-500 text-sm placeholder-gray-300">
                        </div>
                        <div class="flex-1">
                            <label for="phone" class="block text-gray-800 font-bold mb-2 text-[15px]">Nomor Telpon*</label>
                            <input type="text" id="phone" name="phone" placeholder="+62 888-888-8888" class="w-full border border-gray-600 rounded-full px-5 py-2.5 focus:outline-none focus:border-blue-500 text-sm placeholder-gray-300">
                        </div>
                    </div>
                    
                    <div>
                        <label for="email" class="block text-gray-800 font-bold mb-2 text-[15px]">Email</label>
                        <input type="email" id="email" name="email" placeholder="exampleemail@gmail.com" class="w-full border border-gray-600 rounded-full px-5 py-2.5 focus:outline-none focus:border-blue-500 text-sm placeholder-gray-300">
                    </div>
                </div>

                <!-- DETAIL PRODUK -->
                <div>
                    <h3 class="text-xl md:text-2xl font-medium text-gray-800 mb-4 pb-2 border-b border-gray-200">Detail Produk</h3>
                    
                    <div class="flex flex-col md:flex-row gap-6 mb-6">
                        <div class="flex-1">
                            <label for="product_type" class="block text-gray-800 font-bold mb-2 text-[15px]">Jenis Produk*</label>
                            <div class="relative">
                                <select id="product_type" name="product_type" class="w-full border border-gray-600 rounded-full px-5 py-2.5 focus:outline-none focus:border-blue-500 text-sm text-gray-400 appearance-none bg-white cursor-pointer">
                                    <option value="" disabled selected>Pilih Produk</option>
                                    <option value="jersey">Jersey</option>
                                    <option value="kaos">Kaos</option>
                                    <option value="jaket">Jaket</option>
                                </select>
                                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-4 text-gray-500">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                                </div>
                            </div>
                        </div>
                        <div class="flex-1">
                            <label for="quantity" class="block text-gray-800 font-bold mb-2 text-[15px]">Jumlah Total*</label>
                            <input type="number" id="quantity" name="quantity" placeholder="Jumlah Produk" class="w-full border border-gray-600 rounded-full px-5 py-2.5 focus:outline-none focus:border-blue-500 text-sm placeholder-gray-300">
                        </div>
                    </div>
                    
                    <div class="flex flex-col md:flex-row gap-6 mb-6">
                        <div class="flex-1">
                            <label for="deadline" class="block text-gray-800 font-bold mb-2 text-[15px]">Deadline</label>
                            <div class="relative">
                                <input type="text" id="deadline" name="deadline" placeholder="01/01/2025" class="w-full border border-gray-600 rounded-full pl-5 pr-12 py-2.5 focus:outline-none focus:border-blue-500 text-sm placeholder-gray-300">
                                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-4 text-gray-800">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5">
                                      <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="flex-1">
                            <label for="reference" class="block text-gray-800 font-bold mb-2 text-[15px]">Upload Referensi</label>
                            <div class="relative">
                                <input type="text" placeholder="Upload file" class="w-full border border-gray-600 rounded-full pl-5 pr-12 py-2.5 focus:outline-none focus:border-blue-500 text-sm placeholder-gray-300 bg-white" readonly>
                                <input type="file" id="reference" name="reference" class="absolute inset-0 w-full h-full opacity-0 cursor-pointer">
                                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-4 text-gray-800">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5">
                                      <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5m-13.5-9L12 3m0 0l4.5 4.5M12 3v13.5" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div>
                        <label for="notes" class="block text-gray-800 font-bold mb-2 text-[15px]">Catatan Tambahan</label>
                        <input type="text" id="notes" name="notes" placeholder="Catatan anda" class="w-full border border-gray-600 rounded-full px-5 py-2.5 focus:outline-none focus:border-blue-500 text-sm placeholder-gray-300">
                    </div>
                </div>
            </form>

            <!-- CARD FOOTER (Button) -->
            <div class="flex justify-center py-8 border-t border-gray-200">
                <button class="flex items-center gap-2 bg-[#2579F6] hover:bg-blue-600 text-white font-medium py-2.5 px-6 rounded-full shadow-[0px_4px_10px_rgba(31,40,50,0.2),inset_0px_-2px_2px_rgba(83,83,83,0.4),inset_0px_2px_2px_rgba(255,255,255,0.5)] transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M12 20.25c4.97 0 9-3.694 9-8.25s-4.03-8.25-9-8.25S3 7.444 3 12c0 2.104.859 4.023 2.273 5.48.432.447.74 1.04.586 1.641a4.483 4.483 0 01-.923 1.785A5.969 5.969 0 006 21c1.282 0 2.47-.402 3.445-1.087.81.22 1.668.337 2.555.337z" />
                    </svg>
                    Hubungi Kami
                </button>
            </div>
        </div>
    </div>
    
    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Layout.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\Herd\JETA-SAM-PROJECT\resources\views/request.blade.php ENDPATH**/ ?>