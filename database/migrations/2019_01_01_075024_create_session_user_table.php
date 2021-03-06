<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSessionUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('session_user', function (Blueprint $table) {
            $table->increments('pivot_id');
            $table->integer('session_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->enum('join_status', ['allow', 'deny', 'wait'])->default('wait');
            $table->boolean('paid')->default(false);
            $table->integer('plus_minus')->nullable()->comment('加減算');
            $table->string('attribute_name')->nullable()->comment('このセッションにおける、この人の属性名。セッション追加時に、フレンドに属性がついていた場合、その名前をコピペしてくる');
            $table->integer('budget')->nullable()->comment('この人の支払い予定額');
            $table->integer('budget_actual')->nullable()->comment('この人の実際の支払い金額');
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
        Schema::dropIfExists('session_user');
    }
}
