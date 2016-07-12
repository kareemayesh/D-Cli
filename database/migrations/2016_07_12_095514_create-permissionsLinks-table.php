<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePermissionsLinksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('PermissionsLinks', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('permissionId')->index()->unsigned();
            $table->mediumText('link');
            $table->timestamps();
            $table->foreign('permissionId')
                ->references('id')->on('Permissions')
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
        Schema::drop('PermissionsLinks');
    }
}
