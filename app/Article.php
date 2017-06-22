<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model;

class Article extends Model
{
        public $timestamps = false;
     protected $fillable = ['title', 'content', 'coment', 'short'];
}
?>