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
            $table->decimal('unit_price');
            $table->decimal('stock_quantity');
            $table->string('observation')->nullable();
            $table->timestamps();


            //relacionamento aux_type_measures com material
            $table->unsignedBigInteger('measures_type');
            $table->foreign('measures_type')->references('id')->on('aux_type_measures')->onDelete('cascade')->onUpdate('cascade');
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
