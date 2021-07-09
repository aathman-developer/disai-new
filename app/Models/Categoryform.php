<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use App\Models\Gallery;
class Categoryform extends Model
{   
    protected $fillable = [
        'name'
        // add all other fields
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * 
     */
    protected $table = 'category';
   
    protected $appends = [];
    public function images()
    {
        return $this->hasMany(Gallery::class,'category_id', 'category_id');
    }
}