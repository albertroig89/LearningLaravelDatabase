<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpresesClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empreses_clients', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('empreses_id');
            $table->foreign('empreses_id')->references('id')->on('empreses');
            $table->unsignedInteger('clients_id');
            $table->foreign('clients_id')->references('id')->on('clients');
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
        Schema::dropIfExists('empreses_clients');
    }
}
