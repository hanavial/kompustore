<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    public function detail_penjualans()
    {
        return $this->hasMany(DetailPenjualan::class, 'penjualan_id', 'id');
    }
}
