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
        Schema::create('courier_orders', function (Blueprint $table) {
            $table->id();
            $table->string('order_id')->unique();
            $table->string('marchant_id');
            $table->string('customer_name');
            $table->string('customer_number');
            $table->string('customer_alt_number')->nullable();
            $table->string('customer_district');
            $table->string('customer_thana');
            $table->string('customer_address');
            $table->string('actual_amount')->nullable();
            $table->string('cod_amount')->nullable();
            $table->string('invoice')->nullable();
            $table->string('note')->nullable();
            $table->string('weight')->nullable();
            $table->string('status')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courier_orders');
    }
};
