<?php

namespace Autoservicios\Entities;
use Carbon\Carbon;



class Article extends Entity
{
	protected $table = 'articles';
	protected $fillable =  ['title','category_id', 'subcategory_id', 'developing','video', 'slug'];

    public function category()
    {
    	return $this->belongsTo(Category::getClass());
    }
    public function subcategory()
    {
    	return $this->belongsTo(Subcategory::getClass());
    }

    public function VideoAttribute($video)
    {
    	if (empty($video)) {
    		$namevideo = null;
    		return $namevideo;
    	}
    	$this->attributes['video'] = Carbon::now()->second.$video->getClientOriginalName();
    	$namevideo 	= Carbon::now()->second.$video->getClientOriginalName();
    	\Storage::disk('local')->put('video/'. $namevideo, \File::get($video));

    	return $namevideo;
    }

    public function getvideoExist()
    {
    	return $this->video != null;
    }

    public function setVideoAttribute($value)
    { 
        if(!empty($value)){
            $this->attributes['video'] = Carbon::now()->second.$value->getClientOriginalName();
            $namevideo  = Carbon::now()->second.$value->getClientOriginalName();
            \Storage::disk('local')->put('video/'. $namevideo, \File::get($value)); 
        }
    }

}
