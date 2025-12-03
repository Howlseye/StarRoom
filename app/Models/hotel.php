<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    /** @use HasFactory<\Database\Factories\HotelFactory> */
    use HasFactory;
    protected $guarded = ['id'];
    protected $fillable = [
        'nama_hotel',
        'id_kota',
        'bintang',
        'alamat',
        'foto',
    ];

    public function kamar()
    {
        return $this->hasMany(Kamar::class);
    }

    public function fasilitasHotel()
    {
        return $this->hasMany(FasilitasHotel::class);
    }

    public function kota()
    {
        return $this->belongsTo(Kota::class);
    }
}
