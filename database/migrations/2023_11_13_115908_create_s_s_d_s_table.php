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
        Schema::create('s_s_d_s', function (Blueprint $table) {
            $table->id();
            $table->string('ssd_id');
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
        Schema::dropIfExists('s_s_d_s');
    }
};
