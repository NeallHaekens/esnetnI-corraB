<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class lease extends Model
{
    public $table = "leases";


    public function User()
    {
        return $this->belongsTo('\App\User', 'customer_id');
    }



}
