<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class klasifikasi extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'accuracy',
        'precision',
        'f1_score',
        'type',
        'grafik'
    ];
}
