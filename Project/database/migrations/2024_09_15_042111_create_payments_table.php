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
        Schema::create('payments', function (Blueprint $table) {
            $table->uuid('id')->primary(); // UUID sebagai primary key
            $table->uuid('transactionId'); // UUID untuk transactionId
            $table->uuid('paymentableId'); // UUID untuk paymentableId (polymorphic relation mungkin)
            $table->float('amount'); // float untuk jumlah pembayaran
            $table->string('status'); // varchar untuk status
            $table->timestamps(); // otomatis menambahkan kolom created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
