<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = "menucatagory_main";

    public function menu()
    {
        return $this->hasMany(Menu::class, 'cate_id');
    }
}
