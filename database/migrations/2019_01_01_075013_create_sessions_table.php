<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSessionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sessions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable()->comment('セッション名');
            $table->integer('manager_id')->unsigned()->comment('幹事id');
            $table->string('shop_id')->nullable()->comment('ショップid');
            $table->integer('budget')->nullable()->comment('予算');
            $table->integer('actual')->nullable()->comment('実額');
            $table->enum('unit_rounding_budget', [1, 10, 100, 1000, 10000])->default(100)->comment('丸め単位');
            $table->enum('unit_rounding_actual', [1, 10, 100, 1000, 10000])->default(100)->comment('丸め単位');
            $table->timestamp('start_time')->nullable()->comment('開始時刻');
            $table->timestamp('end_time')->nullable()->comment('終了時刻');
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
        Schema::dropIfExists('sessions');
    }
}
