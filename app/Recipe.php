<?php

namespace restaurant;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    protected $primaryKey = 'idRecipe';
    protected $fillable = [
        'idRecipe','name'
      ];

    
     public function foods()
     {
         return $this->belongsToMany('restaurant\Food', 'recipes_details', 'idRecipe', 'idFood')->withPivot('quantity');
     }
      
}
