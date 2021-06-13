<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('people', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('last_name');
            $table->string('id_number');
            $table->string('gender');
            $table->date('birth_date');
            $table->string('city');
            $table->date('contract_start_date');
            $table->date('contract_finish_date');
            $table->unsignedBigInteger('id_position');
            $table->foreign('id_position')->references('id')->on('workforce'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('people');
    }
}
