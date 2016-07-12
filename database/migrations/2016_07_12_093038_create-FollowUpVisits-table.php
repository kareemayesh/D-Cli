<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFollowUpVisitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('FollowUpVisits', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('PatientId')->index()->unsigned();
            $table->integer('FolloUpNo');
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
        Schema::drop('FollowUpVisits');
    }
}
