<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'harga',
        'tanggal',
        'barang',
    ];

    public function pembelis()
    {
        return $this->hasMany(Pembeli::class);
    }
}
