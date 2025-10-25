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
        Schema::create('act_books', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->date('date');
            $table->unsignedBigInteger('org_id');
            $table->foreign('org_id')->references('id')->on('orgs');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('act_books');
    }
};
