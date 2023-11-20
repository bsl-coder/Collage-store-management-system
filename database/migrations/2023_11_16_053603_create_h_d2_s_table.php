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
        Schema::create('h_d2_s', function (Blueprint $table) {
            $table->id();
            $table->string('hd_id');
            $table->string('name',50);
            $table->string('options',50);
            $table->string('model',100);
            $table->string('storage',100);
            $table->text('details');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('h_d2_s');
    }
};
