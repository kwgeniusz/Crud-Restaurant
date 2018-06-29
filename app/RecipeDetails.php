<?php

namespace restaurant;

use Illuminate\Database\Eloquent\Model;

class RecipeDetails extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'recipes_details';
    public $timestamps = false;
    
    protected $fillable = [
       'id','idRecipe','idFood','quantity'
      ];

}
