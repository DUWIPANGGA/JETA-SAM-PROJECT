<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use Faker\Factory as Faker;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Menggunakan Faker bahasa Indonesia
        $faker = Faker::create('id_ID');

        // Kita buat 10 data produk palsu
        for ($i = 0; $i < 10; $i++) {
            Product::create([
                // Asumsi kamu punya minimal 5 kategori di tabel categories (ID 1 sampai 5)
                'category_id' => $faker->numberBetween(1, 5), 
                
                // Menghasilkan nama produk (misal: "Pupuk Sintetis", "Benih Jagung")
                'name' => 'JETA ' . $faker->word(),
                
                // Menghasilkan kalimat deskripsi acak
                'description' => $faker->sentence(10),
                
                // Harga antara Rp 10.000 sampai Rp 500.000 (kelipatan 1000)
                'price' => $faker->numberBetween(10, 500) * 1000,
                
                // Stok antara 10 sampai 100
                'stock' => $faker->numberBetween(10, 100),
                
                // Path gambar dummy yang disesuaikan dengan format controllermu
                'image' => 'products/product_demo.webp',
                
                // Status acak antara active atau inactive
                'status' => $faker->randomElement(['active', 'inactive']),
            ]);
        }
    }
}