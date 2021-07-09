<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $table = 'image_upload';
     protected $fillable = [
        'image'
        // add all other fields
    ];
}
