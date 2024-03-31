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
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->string('firstname');
            $table->string('lastname');
            $table->string('age');
            $table->string('phone');
            $table->string('street');
            $table->string('city');
            $table->string('brgy');
            $table->string('zipcode');
            $table->date('date');
            $table->time('time');
            $table->string('allergic_reaction')->nullable();
            $table->string('vaccine_type');
            $table->string('vaccine_center');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointments');
    }
};
