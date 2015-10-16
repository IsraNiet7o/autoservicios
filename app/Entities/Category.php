<?php

namespace Autoservicios\Entities;

class Category extends Entity
{
	protected $table = 'categories';

    public function subcategories()
    {
    	return $this->hasMany(Subcategory::getClass());
    }

    public function articles()
    {
    	return $this->hasMany(Article::getClass());
    }
}
