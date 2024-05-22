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
        Schema::create('materials', function (Blueprint $table) {
            $table->id();
            $table->string('name');

            //relacionamento aux_type_measures com material
            $table->unsignedBigInteger('id_aux_type_measures');
            $table->foreign('id_aux_type_measures')->references('id')->on('aux_type_measures')->onDelete('cascade')->onUpdate('cascade');

            $table->string('unit_price');
            $table->string('stock_quantity');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('materials');
    }
};
