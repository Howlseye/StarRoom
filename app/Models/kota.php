<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kota extends Model
{
    /** @use HasFactory<\Database\Factories\KotaFactory> */
    use HasFactory;
    protected $guarded = ['id'];
    protected $fillable = [
        'nama_kota',
    ];

    public function hotel()
    {
        return $this->hasMany(Hotel::class);
    }
}
