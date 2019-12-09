<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class supply extends Model
{
    protected $fillable = ['token', 'title', 'price', 'quantity'];
}
