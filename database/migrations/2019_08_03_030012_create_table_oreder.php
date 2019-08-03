<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableOreder extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {	//创建订单表 创建表名oreder
        Schema::create('oreder', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('oreder_code');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {	//数据表的删除
        Schema::drop('oreder');
    }
}
