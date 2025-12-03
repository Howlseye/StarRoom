<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FasilitasHotel extends Model
{
    /** @use HasFactory<\Database\Factories\FasilitasHotelFactory> */
    use HasFactory;
    protected $guarded = ['id'];
    protected $fillable = [
        'id_hotel',
        'id_fasilitas',
    ];

    function fasilitas()
    {
        return $this->belongsTo(Fasilitas::class);
    }

    function hotel()
    {
        return $this->belongsTo(Hotel::class);
    }
}
