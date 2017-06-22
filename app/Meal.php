<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model;

class Meal extends Model
{
        public $timestamps = false;
     protected $fillable = ['first_name', 'last_name', 'email', 'gender', 'city', 'street', 'latitude', 'longitude'];
}
?>