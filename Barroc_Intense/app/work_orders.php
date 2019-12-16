<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class work_orders extends Model
{
    protected $fillable = ['user_id', 'lease_id'];
}
