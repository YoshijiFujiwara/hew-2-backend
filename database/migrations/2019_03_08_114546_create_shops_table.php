<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shops', function (Blueprint $table) {
            $table->increments('id');
            $table->string('shop_id')->unique()->comment('hotpepperのshop_idc');
            $table->string('name');
            $table->float('lng')->comment('経度');
            $table->float('lat')->comment('緯度');
            $table->string('genre_id')->comment('ジャンルID');
            $table->string('genre_name')->comment('ジャンル名');
            $table->string('address')->comment('住所');
            $table->string('large_area_name')->comment('大阪とか');
            $table->string('middle_area_name')->comment('神戸とか');
            $table->string('small_area_name')->comment('三宮とか');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shops');
    }
}
