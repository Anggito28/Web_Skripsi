<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class preprocessing extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'text',
        'sentiment',
        'cleaning',
        'casefolding',
        'tokenizing',
        'normalisasi',
        'stopword',
        'steeming',
        'cleaned'
    ];
}
