document.addEventListener('DOMContentLoaded', function() {
    // Jalankan fungsi hanya jika elemen product-container ada di halaman ini
    if (document.getElementById('product-container')) {
        loadProducts();
    }
});

async function loadProducts() {
    const container = document.getElementById('product-container');

    try {
        // Asumsi rute index() di ProductController kamu adalah /api/products
        const response = await fetch('/api/products', {
            method: 'GET',
            headers: {
                'Accept': 'application/json',
                // Jika rute ini butuh login, aktifkan baris di bawah:
                // 'Authorization': 'Bearer ' + localStorage.getItem('jwt_token')
            }
        });

        const result = await response.json();

        if (result.success) {
            // 1. Kosongkan isi container (menghapus teks "Memuat produk...")
            container.innerHTML = '';

            // 2. Looping data produk dari backend
            result.data.forEach(product => {
                
                // Format Harga ke Rupiah (Otomatis menambahkan Rp. dan titik)
                const formattedPrice = new Intl.NumberFormat('id-ID', { 
                    style: 'currency', 
                    currency: 'IDR',
                    maximumFractionDigits: 0
                }).format(product.price);

                // Buat struktur HTML untuk 1 kartu
                // Perhatikan penggunaan backtick (`) dan variabel ${...}
                const cardHTML = `
                    <div class="min-w-[200px] md:min-w-[240px] w-[200px] md:w-[240px] bg-white flex-shrink-0 snap-center group cursor-pointer border border-gray-300">
                        <div class="h-[240px] md:h-[280px] w-full relative overflow-hidden bg-gray-100">
                            <img src="/storage/${product.image}"
                                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                                alt="${product.name}">
                        </div>
                        <div class="px-4 py-4">
                            <div class="text-gray-800 text-lg font-normal mb-1 truncate">${product.name}</div>
                            <div class="text-[#2B303A] font-normal text-2xl lg:text-3xl tracking-tight mt-1">${formattedPrice}</div>
                        </div>
                    </div>
                `;

                // 3. Masukkan kartu ke dalam wadah (Container)
                container.insertAdjacentHTML('beforeend', cardHTML);
            });
        } else {
            container.innerHTML = `<div class="text-red-500">Gagal memuat data: ${result.message}</div>`;
        }

    } catch (error) {
        console.error('Error fetching products:', error);
        container.innerHTML = '<div class="text-red-500">Terjadi kesalahan jaringan.</div>';
    }
}