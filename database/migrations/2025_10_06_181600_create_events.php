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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name');
            $table->string('description');
            $table->string('direction');
            $table->dateTime('date_plan');
            $table->dateTime('date_fact');
            $table->integer('count_plan');
            $table->integer('count_fact');
            $table->string('result');
            $table->string('photo');
            $table->unsignedBigInteger('org_id');
            $table->foreign('org_id')->references('id')->on('orgs');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
