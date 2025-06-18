<?php

/// database/seeders/ProductSeeder.php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        Product::create([
            'nama_produk' => 'Laskar Pelangi',
            'deskripsi' => 'Novel karya Andrea Hirata tentang perjuangan anak-anak Belitung.',
            'stok' => 100,
            'harga' => 85000,
        ]);

        Product::create([
            'nama_produk' => 'Bumi Manusia',
            'deskripsi' => 'Novel sejarah oleh Pramoedya Ananta Toer, bagian dari Tetralogi Buru.',
            'stok' => 75,
            'harga' => 95000,
        ]);

        Product::create([
            'nama_produk' => 'Atomic Habits',
            'deskripsi' => 'Panduan mengubah kebiasaan dan membentuk perilaku produktif.',
            'stok' => 50,
            'harga' => 120000,
        ]);
    }
}
