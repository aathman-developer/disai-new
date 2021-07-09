<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use App\Models\Categoryform;

class Gallery extends Model
{
	//use HasFactory;
    protected $table='ipa_gallery';
	protected $fillable=['galleryimage','category_id'];

	protected $appends = ['gallery_image', 'scheme_name'];
	public function getGalleryImageAttribute()
	{
		return url('/').'/gallerys/'.$this->attributes['galleryimage'];
	}	
	public function getSchemeNameAttribute()
    {
		$get_scheme=Categoryform::where('category_id',$this->attributes['category_id'])->first();
		// dd($get_scheme);
        if($get_scheme)
            return $get_scheme;
        else
            return 0;
    }
}