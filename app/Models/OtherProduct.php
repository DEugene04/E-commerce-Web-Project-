<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OtherProduct extends Model
{
    use HasFactory;

    protected $fillable = [
        'NamaOther',
        'HargaOther',
        'DescriptionOther',
        'FotoOther',
    ];
}
