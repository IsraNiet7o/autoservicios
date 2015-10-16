<?php

use Autoservicios\Entities\Category;
use Faker\Factory as Faker;
use Faker\Generator;
use Illuminate\Support\Str as Str;

class CategoryTableSeeder extends BaseSeeder
{
	public function getModel()
	{
	    return new Category();
	}

	public function getDummyData(Generator $faker, array  $customValues =array())
	{	
		$title = $faker->sentence($nbWords = 3);
		$slug = Str::slug($title);
	    return [
	            'category'    	=> $title,
	            'header'     	=> $faker->sentence,
	            'descrip'       => $faker->paragraph(),
	            'slug'			=> $slug,
	            'icono'			=> 'autorenew'
	        ];
	}

    public function run()
    {
        $this->createMultiple(2);
    }
}
