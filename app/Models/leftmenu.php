<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class leftmenu extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        // 'image',
        'headContent',
        'content',
        'created_at',
    ];
}