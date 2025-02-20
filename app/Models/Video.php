<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;

    protected $table = 'videos'; // Table ka naam

    protected $fillable = [
        'id',
        'name',
        'url',
        'author',
    ];
}
