<?php

namespace Autoservicios\Entities;

class Subcategory extends Entity
{
	protected $table = 'subcategories';
	
    public function category()
    {
    	return $this->belongsTo(Category::getClass());
    }
    public function articles()
    {
    	return $this->hasMany(Article::getClass());
    }
}
