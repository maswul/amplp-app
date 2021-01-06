<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\AsetsKategori;

class Asets extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $casts = [
        'dipinjam' => 'boolean',
    ];

    protected $appends = ['pic_name','kategori'];

    public function AsetsKategori()
    {
        return $this->belongsTo('App\Models\Asets', 'id', 'kategori_id');
    }

    public function getPicNameAttribute()
    {
        return User::where('id','=',$this->pic_id)->first()->name;
    }
    public function getKategoriAttribute()
    {
        return AsetsKategori::where('id', '=',$this->kategori_id)->first()->name;
    }
}
