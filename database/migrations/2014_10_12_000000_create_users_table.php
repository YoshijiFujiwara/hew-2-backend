<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('unique_id')->unique()->comment('検索などに使用するunique_id');
            $table->string('username')->nullable()->comment('ユーザーネーム。管理者はnullでもいいでしょ');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('name')->nullable()->comment('本名。管理者用');
            $table->string('is_admin')->default(false)->comment('管理者ならtrue');
            $table->rememberToken();
            $table->boolean('unique_id_search_flag')->default(false)->comment('unique_idでの検索を有りにする');
            $table->boolean('username_search_flag')->default(false)->comment('unique_idでの検索を有りにする');
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
        Schema::dropIfExists('users');
    }
}
