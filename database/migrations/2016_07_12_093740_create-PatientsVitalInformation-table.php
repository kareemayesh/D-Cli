<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientsVitalInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('PatientsVitalInformation', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('PatientId')->index()->unsigned();
            $table->integer('DiseaseId')->index()->unsigned();
            $table->string('Diagnosis');
            $table->timestamps();
            $table->foreign('PatientId')
                ->references('id')->on('patients')
                ->onDelete('cascade');
            $table->foreign('DiseaseId')
                ->references('id')->on('Disease')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('PatientsVitalInformation');
    }
}
