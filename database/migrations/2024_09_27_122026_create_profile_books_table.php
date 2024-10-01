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
        Schema::create('profile_books', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('nickname');
            $table->string('address');

            $table->string('phone_number');
            $table->foreignId('blood_type_id')->constrained();
            $table->foreignId('hobby_id')->constrained();

            $table->string('best_three_1');
            $table->string('best_three_2')->nullable();
            $table->string('best_three_3')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profile_books');
    }
};
