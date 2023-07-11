<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('benificiario', function (Blueprint $table) {
            $table->id();
            $table->string('nombreOrganizacion');
            $table->string('tipoBenificiario');
            $table->unsignedBigInteger('transaccion_id');
            $table->foreign('transaccion_id')->references('id')->on('transaccion');
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
        Schema::dropIfExists('benificiario');
    }
};
