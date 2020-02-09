<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table='product'; 
    protected $guarded=[]; 

    public function Size(){
    	return $this->hasMany('App\Books','a_id','id');
    }
}
