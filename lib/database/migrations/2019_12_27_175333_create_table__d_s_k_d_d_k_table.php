<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableDSKDDKTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('DSDKDK', function (Blueprint $table) {
            $table->integer('sv_id');
            $table->string('sv_name'); 
            $table->integer('sub_id');
            $table->string('sub_name');
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
        Schema::dropIfExists('DSDKDK');
    }
}
