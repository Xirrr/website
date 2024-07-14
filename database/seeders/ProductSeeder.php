<?php
use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run()
    {
        Product::create([
            'name' => 'Kursi Kayu',
            'description' => 'Kursi kayu jati yang nyaman dan tahan lama.',
            'price' => 500000,
        ]);
        Product::create([
            'name' => 'Meja Belajar',
            'description' => 'Meja belajar dengan desain minimalis.',
            'price' => 750000,
        ]);
    }
}
