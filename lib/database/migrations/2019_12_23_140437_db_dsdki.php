<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DbDsdki extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('db_dsdki', function (Blueprint $table) {
            $table->integer('sv_id');
            $table->string('sv_name');
            $table->integer('room_id');
            $table->string('room_name');
            $table->integer('sub_id');
            $table->string('sub_name');
            $table->date('time');
            $table->tinyInteger('shift');
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
        Schema::dropIfExists('db_dsdki');
    }
}
