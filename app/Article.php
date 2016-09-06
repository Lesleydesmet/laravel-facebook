<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'title', 'username', 'body',
    ];

    /**
     * The attributes that should be hidden for arrays.
     ***/
 
    protected $table = 'article_table';
    public $timestamps=false;
}
