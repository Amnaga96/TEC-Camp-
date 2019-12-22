<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClinicDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clinic__doctors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->UnsignedBigInteger('clinic_id');
            $table->foreing('clinic_id')->references('id')->on('clinics');

            $table->UnsignedBigInteger('doctor_id');
            $table->foreing('doctor_id')->references('id')->on('doctors');

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
        Schema::dropIfExists('clinic__doctors');
    }
}
