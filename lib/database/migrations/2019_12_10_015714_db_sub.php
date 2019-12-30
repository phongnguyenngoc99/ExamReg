<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DbSub extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('db_sub', function (Blueprint $table) {
            $table->increments('sub_id');
            $table->string('sub_name');
            $table->tinyInteger('shift');
            $table->string('slug');
            $table->date('time');
            $table->integer('room_id') -> unsigned();
            $table->integer('amount') -> unsigned();
            $table->foreign('room_id')
                  ->references('room_id')
                  ->on('db_room')
                  ->onDelete('cascade');
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
        Schema::dropIfExists('db_sub');
    }
}
