<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactDetails extends Model
{
    protected $table = 'contact_details';
    protected $appends = ['show_date'];
    public function getShowDateAttribute()
    {
        return date('M d, Y',strtotime($this->attributes['created_at']));
    }
}
