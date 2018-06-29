<?php

namespace restaurant;

use Illuminate\Database\Eloquent\Model;

class Plate extends Model
{
    protected $primaryKey = 'idPlate';
    public $timestamps = false;
    protected $fillable = [
        'idPlate','idRecipe'
      ];
      
}
