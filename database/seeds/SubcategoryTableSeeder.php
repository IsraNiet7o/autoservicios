<?php

use Autoservicios\Entities\Subcategory;
use Faker\Factory as Faker;
use Faker\Generator;
use Illuminate\Support\Str as Str;

class SubcategoryTableSeeder extends BaseSeeder
{
	public function getModel()
	{
	    return new Subcategory();
	}

	public function getDummyData(Generator $faker, array  $customValues =array())
	{	
		$title = $faker->sentence($nbWords = 4);
		$slug = Str::slug($title);
	    return [
	            'title'    			=> $title,
	            'category_id'       => $this->getRandom('Category')->id,
	            'descrip_ini'     	=> $faker->paragraph($nbSentences = 3),
	            'descrip_foo'     	=> $faker->paragraph($nbSentences = 2),
	            'slug'				=> $slug
	        ];
	}

    public function run()
    {
        $this->createMultiple(10);
    }
}
