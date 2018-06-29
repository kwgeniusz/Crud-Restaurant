<?php

namespace restaurant;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    protected $primaryKey = 'idFood';
  
    protected $fillable = [
	  'idFood','name','type','weight','price'
	];
 

   public function recipes()
   {
       return $this->belongsToMany('restaurant\Recipe');
   }
}
