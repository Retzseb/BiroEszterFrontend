<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Esemeny extends Model
{
    /** @use HasFactory<\Database\Factories\EsemenyFactory> */
    use HasFactory;

        protected $fillable = [
        'kategoria_id',
        'esemeny_nev',
        'leiras',
        'resztvevok',
        'ar',
        'kepUrl'
    ];

    public function kategoria()
    {
    return $this->hashMany(kategoria::class);
    }
}
