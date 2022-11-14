<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $table = 'posts';

    protected $fillable = [
      'title', 'author', 'content', 'featured_image'
    ];

    protected $casts = [
        'created_at' => 'datetime:d/m/Y H:i',
    ];
}
