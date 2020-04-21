<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFishTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fishes', function (Blueprint $fishes) {
          $fishes -> increments('id');
          $fishes -> string('fish_Name',200);
          $fishes -> text('fish_Image');
          $fishes -> string('fish_Rate',50);
          $fishes -> integer('fish_Quantity');
          $fishes -> string('fish_Packing',100);
          $fishes -> timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fishes');
    }
}
