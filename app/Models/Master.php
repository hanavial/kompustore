<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Master extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['nama_barang','slug','harga','stok','kategori_id'];
    protected $with = ['kategori','detail_penjualans'];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'kategori_id', 'id');
    }

    public function detail_penjualans()
    {
        return $this->hasMany(DetailPenjualan::class, 'master_id', 'id');
    }
}
