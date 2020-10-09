<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Master;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(Master::class, function (Faker $faker) {
    return [
        'nama_barang' => $faker->word,
        'slug' => Str::slug($faker->word),
        'harga' => rand('50000','1000000'),
        'stok' => rand('10','100'),
        'kategori_id' => rand('1','2')
    ];
});
