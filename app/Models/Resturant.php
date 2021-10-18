<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resturant extends Model
{
    use HasFactory;

    protected $table = 'menurestaurant';

    public function category()
    {
        return $this->hasMany(Category::class, 'user_id', 'user_id');
    }
}
