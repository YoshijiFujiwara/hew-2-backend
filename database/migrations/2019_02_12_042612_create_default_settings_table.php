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
