<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class leftmenu extends Model
{
    use HasFactory;

    protected $fillable = [
        'title_menu',
        // 'image',
        'headContent_menu',
        'content_menu',
        'created_at',
    ];

    // public function menu()
    // {
    //     return $this->hasMany(menu::class, 'id', 'menu_id');
    // }
}
