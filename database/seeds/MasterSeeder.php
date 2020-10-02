<?php

use App\Models\Master;
use Illuminate\Database\Seeder;

class MasterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Master::create([
            'nama_barang' => 'Intel G3456',
            'slug' => 'intel-g3456',
            'harga' => '800000',
            'stok' => '20',
            'kategori_id' => 1
        ]);

        Master::create([
            'nama_barang' => 'SSD Western Digital 256GB',
            'slug' => 'ssd-western-digital-256gb',
            'harga' => '300000',
            'stok' => '40',
            'kategori_id' => 2
        ]);
    }
}
