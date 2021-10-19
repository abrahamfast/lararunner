<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CallWaiter extends Model
{
    use HasFactory;

    protected $table = "menuwaiter_call";
    protected $quarded = [];
    protected $timestamps = false;

}
