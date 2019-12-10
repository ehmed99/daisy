<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EmployTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('employ', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('emplyName');
            $table->string('employAddress');
            $table->string('employPh');
            $table->string('employJoining');
            $table->string('employSalary');
            $table->string('employDesignation');
            $table->string('employIncentives');
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
        //
        Schema::dropIfExists('employ');
    }
}
