<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Malfunction extends Model
{
    protected $fillable = ['client_id', 'malfunction_type_id', 'description',];
}
