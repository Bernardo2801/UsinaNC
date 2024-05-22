<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('solicitations', function (Blueprint $table) {
            $table->id();

            //relacionamento requester com solicitacao
            $table->unsignedBigInteger('id_requester');
            $table->foreign('id_requester')->references('id')->on('requesters')->onDelete('cascade')->onUpdate('cascade');

            //relacionamento material com solicitacao
            $table->unsignedBigInteger('id_material');
            $table->foreign('id_material')->references('id')->on('materials')->onDelete('cascade')->onUpdate('cascade');

            $table->string('unit_price');
            $table->string('sei_number');
            $table->string('requested_quantity');
            $table->string('date_solicitation');
            $table->string('status');

            //relacionamento motorista com solicitacao
            $table->unsignedBigInteger('id_driver');
            $table->foreign('id_driver')->references('id')->on('drivers')->onDelete('cascade')->onUpdate('cascade');

            //relacionamento veiculo com solicitacao
            $table->unsignedBigInteger('id_vehicle');
            $table->foreign('id_vehicle')->references('id')->on('vehicles')->onDelete('cascade')->onUpdate('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('solicitations');
    }
};
