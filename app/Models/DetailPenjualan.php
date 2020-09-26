<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetailPenjualan extends Model
{
    public function master()
    {
        return $this->belongsTo(Master::class, 'master_id', 'id');
    }

    public function penjualan()
    {
        return $this->belongsTo(Penjualan::class, 'penjualan_id', 'id');
    }
}
