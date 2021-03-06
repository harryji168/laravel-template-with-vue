<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateThreeLoginsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('three_logins', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('admin_id')->nullable()->comment('用户id');
            $table->integer('platform_id')->comment('第三方平台上的id号');
            $table->string('provider')->comment('第三方平台');
            $table->string('remark')->nullable()->comment('备注');
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
        Schema::dropIfExists('three_logins');
    }
}
