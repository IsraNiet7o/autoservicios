<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEquipmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipment', function (Blueprint $table) {
            $table->increments('id');
            
            $table->string('brand');
            $table->string('model')->unique();
            $table->string('img')->nullable();
            $table->enum('type',['multi','print']);
            $table->enum('color',['color','byn']);
            $table->string('driver32')->nullable();
            $table->string('driver64')->nullable();
            $table->string('manual')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('equipment');
    }
}
