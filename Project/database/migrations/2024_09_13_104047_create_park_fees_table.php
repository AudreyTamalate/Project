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
        Schema::create('park_fees', function (Blueprint $table) {
            $table->id(); // UUID (id)
            $table->uuid('parkingLotId'); // UUID for parkingLotId
            $table->string('vehicleModel'); // varchar for vehicleModel
            $table->float('initialEntryAmount'); // float for initialEntryAmount
            $table->float('increment'); // float for increment
            $table->float('maxFlatAmount'); // float for maxFlatAmount
            $table->integer('penaltyDuration'); // integer for penaltyDuration
            $table->timestamps(); // createdAt and updatedAt
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('park_fees');
    }
};
