<?php

namespace restaurant;

use Illuminate\Database\Eloquent\Model;

class FoodProduction extends Model
{
    protected $primaryKey = 'idFood';
    protected $table = 'foods_production';

    protected $fillable = [
        'idFood','quantityProduction'
      ];
      public function foods()
   {
    return $this->hasOne('restaurant\Food', 'idFood', 'idFood');
   }
}
