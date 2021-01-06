<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AsetsKategori extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function Asets()
    {
        return $this->hasOne('App\Models\AsetsKategori','kategori_id','id');
    }
}
