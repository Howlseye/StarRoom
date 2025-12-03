<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemesanan extends Model
{
    /** @use HasFactory<\Database\Factories\PemesananFactory> */
    use HasFactory;
    protected $guarded = ['id'];
    protected $fillable = [
        'id_user',
        'id_kamar',
        'jumlah_kamar',
        'tanggal_checkin',
        'tanggal_checkout',
        'total_harga',
        'status_pemesanan',
        'metode_pembayaran'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function kamar()
    {
        return $this->belongsTo(Kamar::class);
    }
}
