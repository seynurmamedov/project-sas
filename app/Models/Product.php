<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table='product'; 
    protected $guarded=[]; 
    public function Gender(){
    	return $this->belongsTo('App\Models\Gender','gender_id','id');
    }
    public function Category(){
    	return $this->belongsTo('App\Models\Category','cat_id','id');
    }
    public function Size(){
    	return $this->hasMany('App\Models\Size','p_id','id');
    }
    public function Color(){
    	return $this->hasMany('App\Models\Color','p_id','id');
    }
    public function Images(){
        return $this->hasMany('App\Models\Images','p_id','id')->where(['is_delete'=>0]);

    }
  
}
