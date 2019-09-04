<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserAddressTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_address', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id')->comment('地址对应的用户');
            $table->string('reciver_name')->comment('收件人姓名');
            $table->string('timezone')->default()->comment('联系电话时区');
            $table->string('phone')->comment('收件人电话');
            $table->bigInteger('country')->comment('收件人国家 id');
            $table->string('city')->comment('收件人城市');
            $table->string('street')->comment('收件人街道');
            $table->string('door_no')->comment('收件人门牌号');
            $table->string('postcode')->comment('收件人邮编');

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
        Schema::dropIfExists('user_address');
    }
}
