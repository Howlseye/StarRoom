<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kamar extends Model
{
    /** @use HasFactory<\Database\Factories\KamarFactory> */
    use HasFactory;
    protected $guarded = ['id'];
    protected $fillable = [
        'id_hotel',
        'tipe_kamar',
        'kapasitas',
        'harga',
        'stok',
    ];

    function hotel()
    {
        return $this->belongsTo(Hotel::class);
    }
}
