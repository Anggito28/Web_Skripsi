<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class data_seleb extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'nama_seleb',
        'username',
        'following',
        'follower',
        'post',
        'positif',
        'negatif',
        'neutral',
        'photo',
        'kategori'
    ];
}
