<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Daftar kategori pertanian untuk TaniSmart
        $categories = [
            'jersey',
            'kemeja',
            'Tas',
            'Celana',
            'Jaket'
        ];

        // Looping untuk memasukkan setiap nama ke dalam database
        foreach ($categories as $categoryName) {
            Category::create([
                'name' => $categoryName
            ]);
        }
    }
}