<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Worker extends Model
{
    public function area(){
        return $this->belongsTo('App\Area');
    }
}
