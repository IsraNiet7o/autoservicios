<?php

use Autoservicios\User;
use Faker\Factory as Faker;
use Faker\Generator;

class UserTableSeeder extends BaseSeeder
{
    public function getModel()
    {
        return new User();
    }

    public function getDummyData(Generator $faker, array  $customValues =array())
    {
        return [
                'email'         =>$faker->email,
                'type'          =>'user',
                'password'      => bcrypt('123456') //bcrypt('isra') 
            ];
    }

    public function run()
    {
        $this->createAdmin();
        $this->createMultiple(2);
  
    }

    public function createAdmin()
    {
        $this->create([
            'email'             =>'sistemas@aptoner.com.mx',
            'type'              =>'admin',
            'password'          => bcrypt('admin') //bcrypt('isra')

        ]);
    }
}
