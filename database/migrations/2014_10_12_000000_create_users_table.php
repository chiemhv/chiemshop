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
            $table->string('name');
            $table->string('email')->unique();
            $table->string('role')->nullable();
            $table->string('phone')->unique();
            $table->string('password');
            //-- thông tin người dùng .
            $table->string('mobile')->nullable(); 
            $table->string('sex')->nullable();  // giới tính
            $table->string('CMND')->nullable(); // số CMND
            $table->text('job')->nullable();  // nghề nghiệp 
            $table->text('office')->nullable(); // nơi công tác 
            $table->text('address')->nullable(); // địa chỉ giao hàng 
            $table->integer('point')->nullable(); // điểm thưởng 
            $table->float('money')->nullable(); // số tiền đã nạp vào 
            $table->float('buyMoney')->nullable(); // số tiền đã mua hàng
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
