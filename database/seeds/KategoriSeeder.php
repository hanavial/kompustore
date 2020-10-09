<?php

use App\Models\Kategori;
use Illuminate\Database\Seeder;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Kategori::create([
            'kategori_nama' => 'Processor',
            'slug' => 'processor'
        ]);

        Kategori::create([
            'kategori_nama' => 'Storage',
            'slug' => 'storage'
        ]);

        Kategori::create([
            'kategori_nama' => 'Alat',
            'slug' => 'alat'
        ]);
    }
}
