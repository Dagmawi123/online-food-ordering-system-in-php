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
        Schema::create('restaurants', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('Cat_Id')->constrained('categories')->onDelete('cascade');
            $table->string('title');
            $table->string('email');
            $table->string('phone');
            $table->string('website');
            $table->string('o_hr');
            $table->string('c_hr');
            $table->string('o_days');
            $table->string('address');
            $table->string('image');
            $table->date('date');

            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('restaurants');
    }
};
