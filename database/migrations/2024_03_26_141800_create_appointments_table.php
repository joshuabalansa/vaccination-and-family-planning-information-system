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
            $table->string('middlename');
            $table->string('lastname');
            $table->date('birthdate');
            $table->time('time');
            $table->string('bw')->nullable();
            $table->string('bl')->nullable();
            $table->string('city');
            $table->string('brgy');
            $table->string('phone');
            $table->string('g')->nullable();
            $table->string('p')->nullable();
            $table->string('a')->nullable();
            $table->string('lb')->nullable();
            $table->string('d')->nullable();
            $table->string('philhealth')->nullable();
            $table->string('4ps_number')->nullable();
            $table->string('m_name');
            $table->date('m_birthdate');
            $table->string('m_age');
            $table->string('m_occupation')->nullable();
            $table->string('f_name');
            $table->date('f_birthdate');
            $table->string('f_age');
            $table->string('f_occupation')->nullable();
            $table->string('status')->default('pending');
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
