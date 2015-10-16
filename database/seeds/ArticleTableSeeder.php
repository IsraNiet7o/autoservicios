<?php

use Autoservicios\Entities\Article;
use Faker\Factory as Faker;
use Faker\Generator;
use Illuminate\Support\Str as Str;

class ArticleTableSeeder extends BaseSeeder
{
    public function getModel()
	{
	    return new Article();
	}

	public function getDummyData(Generator $faker, array  $customValues =array())
	{	
		$title = $faker->sentence($nbWords = 4);
		$slug = Str::slug($title);
	    return [
	            'title'    			=> $title,
	            'category_id'       => $this->getRandom('Category')->id,
	            'subcategory_id'  	=> $this->getRandom('Subcategory')->id,
	            'developing'     	=> $faker->paragraph($nb = 10),
	            'video'  		   	=> 'https://www.youtube.com/embed/wNBghMbDq48',
	            'slug'				=> $slug
	        ];
	}

    public function run()
    {
        $this->createMultiple(40);
    }
}
