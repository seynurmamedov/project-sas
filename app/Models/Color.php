<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    protected $table='color'; 
    protected $guarded=[]; 

    public function ColorCode(){
        return $this->belongsTo('App\Models\ColorStatic','color_id','id')->where(['is_delete'=>0]);
    }
}

