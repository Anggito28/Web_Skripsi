<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class training_data extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'text',
        'sentiment',
        'update'
    ];
}
