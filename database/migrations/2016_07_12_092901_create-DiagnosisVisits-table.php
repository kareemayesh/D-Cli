<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiagnosisVisitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('DiagnosisVisits', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('PatientId')->index()->unsigned();
            $table->integer('VisitNo');
            $table->string('reason');
            $table->date('date');
            $table->mediumText('notes');
            $table->timestamps();
            $table->foreign('PatientId')
                ->references('id')->on('patients')
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
        Schema::drop('DiagnosisVisits');
    }
}
