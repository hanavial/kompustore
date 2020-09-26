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
            'kategori_nama' => 'processor'
        ]);

        Kategori::create([
            'kategori_nama' => 'storage'
        ]);

        Kategori::create([
            'kategori_nama' => 'alat'
        ]);
    }
}
