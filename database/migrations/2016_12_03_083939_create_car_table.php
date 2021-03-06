<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('car', function (Blueprint $table) {
            $table->increments('id');
            $table->string('car_name');
            $table->string('brand');
            $table->string('type');
            $table->integer('price');
            $table->text('details');
            $table->date('date_of_start')
            $table->date('date_of_end')
            $table->string('idcard')
            $table->string('name')
            $table->integer('tel')
            $table->text('address')
            $table->string('Login_name')
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
        Schema::dropIfExists('car');
    }
}
