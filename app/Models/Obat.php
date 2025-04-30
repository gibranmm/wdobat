<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Obat extends Model
{
    protected $fillable = [
        'nama_obat',
        'kemasan',
        'harga'
    ];

    public function obat(): HasMany
    {
        return $this->hasMany(DetailPeriksa::class,'id_obat');
    }

    public function periksas()
    {
        return $this->belongsToMany(Periksa::class, 'periksa_obats', 'id_obat', 'id_periksa');
    }

}
