<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewProduct extends Model
{
    use HasFactory;

    protected $fillable = [
        'NamaNew',
        'HargaNew',
        'DescriptionNew',
        'FotoNew',
    ];
}
