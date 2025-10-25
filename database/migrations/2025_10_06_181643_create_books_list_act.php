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
        Schema::create('books_list_act', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('act_id');
            $table->foreign('act_id')->references('id')->on('act_books');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books_list_act');
    }
};
