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
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->foreign('order_id')->references('id')->on('oders')->onDelete('cascade');
            $table->unsignedBigInteger('order_id');
            $table->string('first-name')->nullable();
            $table->string('last-name')->nullable();
            $table->string('email')->nullable();
            $table->text('noted');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('addresses');
    }
};
