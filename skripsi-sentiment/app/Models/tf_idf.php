<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tf_idf extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'text',
        'sentiment',
        'tf',
        'idf',
        'tfidf'
    ];
}
