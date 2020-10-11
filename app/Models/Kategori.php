<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $with = ['masters'];

    public function masters()
    {
        return $this->hasMany(Master::class, 'kategori_id', 'id');
    }
}
