<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class MsmeForm extends Model
{   
    protected $fillable = [
        'name',
        'company',
        'contact',
        'email',
        // add all other fields
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * 
     */
    protected $table = 'msme_form';

    public function getDetails()
    {
        if($this->attributes['name']!="")
            return $this->attributes['name'];
        else
            return $this->attributes['name'];
    }

}