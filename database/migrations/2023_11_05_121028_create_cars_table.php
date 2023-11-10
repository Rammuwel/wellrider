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
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('carname');
            $table->string('mileage');
            $table->string('plate_no');
            $table->string('daily_price');
            $table->string('carid');
            $table->string('image');
            $table->string('model');
            $table->string('fuel_type');
            $table->string('address');
            $table->string('condition');
            $table->unsignedBigInteger('owner_id');
            $table->timestamps();
            $table->foreign('owner_id')->references('id')->on('owners');

            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
