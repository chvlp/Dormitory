<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDormitoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dormitory', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('school_id')->unsigned();
            $table->bigInteger('user_id')->unsigned();
            $table->string('name');
            $table->string('village');
            $table->string('distric');
            $table->string('province');
            $table->string('phone');
            $table->string('horm');
            $table->string('phase');
            $table->string('locat');
            $table->string('price');
            $table->string('detail');
            $table->string('image');
            $table->timestamps();
        });
        Schema::table('dormitory', function (Blueprint $table) {
            $table->foreign('school_id')->references('id')->on('schools')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dormitory');
    }
}
