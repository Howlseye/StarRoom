<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fasilitas extends Model
{
    /** @use HasFactory<\Database\Factories\FasilitasFactory> */
    use HasFactory;
    protected $guarded = ['id'];

    public function fasilitasHotel()
    {
        return $this->hasMany(FasilitasHotel::class);
    }
}
