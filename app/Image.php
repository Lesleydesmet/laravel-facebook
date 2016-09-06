<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
   	protected $table= 'images';

    protected $fillable = [
        'image_location', 'image_type',
    ];
    public $timestamps=false;
}
