<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    //
    protected $fillable = [
        'shopname', 'address', 'url', 'image', 'introduction'
    ];
}
