<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            Schema::table('users', function (Blueprint $table) {
                $table->string('phone')->default('')->nullable();
                $table->string('last_name')->default('')->nullable();
                $table->string('second_name')->default('')->nullable();
                $table->date('birthday')->nullable();
                $table->boolean('is_active');
//                $table->unsignedBigInteger('role')->unsigned();
            });
        });
    }

    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
};
