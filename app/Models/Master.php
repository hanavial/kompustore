<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Master extends Model
{
    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'kategori_id', 'id');
    }

    public function detail_penjualans()
    {
        return $this->hasMany(DetailPenjualan::class, 'master_id', 'id');
    }
}
