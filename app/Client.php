<?php

namespace restaurant;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
	  'ci','name','address','phone'
	];
   protected $primaryKey = 'ci';
	
	
	
	
}
