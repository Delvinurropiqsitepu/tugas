<?php

namespace Database\Seeders;
use App\Models\Pembeli;
use App\Models\Product;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $product1 = Product::create([
            'name' => 'Produk 1',
            'harga' => 10000,
            'tanggal' => '2023-01-01',
            'barang' => 'electronic',
        ]);

        $product2 = Product::create([
            'name' => 'Produk 2',
            'harga' => 20000,
            'tanggal' => '2023-02-01',
            'barang' => 'furniture',
        ]);

        Pembeli::create([
            'nama' => 'arip',
            'product_id' => $product1->id
        ]);

        Pembeli::create([
            'nama' => 'arip kunss',
            'product_id' => $product1->id
        ]);

        Pembeli::create([
            'nama' => 'arip kun ss',
            'product_id' => $product1->id
        ]);

        Pembeli::create([
            'nama' => 'anjas',
            'product_id' => $product2->id
        ]);

        Pembeli::create([
            'nama' => 'anjas kunss',
            'product_id' => $product2->id
        ]);

        Pembeli::create([
            'nama' => 'anjas kun ss',
            'product_id' => $product2->id
        ]);
    }
}

