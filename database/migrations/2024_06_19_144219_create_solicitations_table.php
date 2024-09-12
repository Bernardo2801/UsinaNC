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
            $table->foreignId('requester_id')->references('id')->on('requesters');
            $table->foreignId('material_id')->references('id')->on('materials');
            $table->decimal('unit_price');
            $table->string('sei_number');
            $table->decimal('requesWted_quantity');
            $table->date('date_solicitation');
            $table->string('status');
            $table->foreignId('driver_id')->references('id')->on('drivers');
            $table->foreignId('vehicle_id')->references('id')->on('vehicles');
            $table->string('observation')->nullable();
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
