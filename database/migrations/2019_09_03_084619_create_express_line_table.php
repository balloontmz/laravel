<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExpressLineTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // 快递线路
        Schema::create('express_line', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('cn_name')->comment('线路中文名');
            $table->string('en_name')->comment('线路英文名');
            $table->json('country')->comment('支持的国家 id 数组');
            $table->string('reference_time')->comment('参考收货时间');

            $table->mediumInteger('first_weight')->comment('首重 g');
            $table->bigInteger('first_money')->comment('首费 分 为单位');
            $table->mediumInteger('next_weight')->comment('续重 g');
            $table->bigInteger('next_money')->comment('续费 分 为单位');

            $table->mediumInteger('min_weight')->comment('最小重 g');
            $table->mediumInteger('max_weight')->comment('最大重 g');
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
        Schema::dropIfExists('express_line');
    }
}
