<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOperationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('operations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('PatientId')->index()->unsigned();
            $table->integer('VisitNo');
            $table->string('OperationType');
            $table->date('date');
            $table->string('teeth');
            $table->mediumText('description');
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
        Schema::drop('operations');
    }
}
