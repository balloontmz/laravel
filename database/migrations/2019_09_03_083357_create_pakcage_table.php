<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePakcageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pakcage', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id')->comment('包裹对应的用户');
            $table->string('package_name')->comment('包裹内容物名称');
            $table->bigInteger('package_value')->comment('包裹价值 -- 分为单位');
            $table->bigInteger('prop_id')->comment('属性 id');
            $table->mediumInteger('status')->nullable()->comment('包裹状态');

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
        Schema::dropIfExists('pakcage');
    }
}
