<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserFriendsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_friends', function (Blueprint $table) {
            $table->increments('pivot_id');
            $table->integer('user_id')->unsigned()->comment('ユーザーid');
            $table->integer('friend_id')->unsigned()->comment('と、その友達のid');
            $table->boolean('permitted')->nullable()->comment('友達追加OKか。nullが待機中');
            $table->integer('attribute_id')->unsigned()->nullable()->comment('属性id');
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
        Schema::dropIfExists('user_friends');
    }
}
