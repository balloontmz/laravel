<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

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
            $table->bigIncrements('id');
            $table->string('open_id')->nullable()->comment('微信 open_id');
            $table->string('session_token')->nullable()->comment('微信 session_token');
            $table->string('name')->nullable()->comment('用户名');
            $table->string('email')->nullable()->comment('用户绑定邮箱');
            $table->string('avatar')->nullable()->comment('用户头像');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable()->comment('用户密码');
            $table->timestamps();
        });

        DB::statement("ALTER TABLE `users` AUTO_INCREMENT = 100000000");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user');
    }
}
