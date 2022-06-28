<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class menu extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        // 'image',
        'headContent',
        'content',
        'created_at',
    ];

    // public function leftMenu()
    // {
    //     return $this->hasMany(leftmenu::class, 'id', 'leftmenu_id');
    // }
}
