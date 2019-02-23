<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDefaultSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('default_settings', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('manager_id')->comment('この設定を管理するmanager_id');
            $table->boolean('current_location_flag')->default(true)->comment('現在地を設定する場合は、1(true)を入れる');
            $table->float('longitude')->nullable()->comment('経度。現在値');
            $table->float('latitude')->nullable()->comment('緯度。');
            $table->integer('group_id')->comment('この設定で自動で読み込むグループのid');
            $table->string('name')->comment('設定名称');
            $table->time('timer')->comment('セッションが始まるまでの時間をtimestampで格納する');
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
        Schema::dropIfExists('default_settings');
    }
}
