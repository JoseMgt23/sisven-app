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
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->integer('number')->unique();
            $table->unsignedBigInteger('id_customers');
            $table->unsignedBigInteger('id_paymode');
            
            // Claves foráneas
            $table->foreign('id_customers')->references('id')->on('customer');
            $table->foreign('id_paymode')->references('id')->on('paymode');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoices');
    }
};
