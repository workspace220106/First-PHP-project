<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
public function up(): void
{
    Schema::create('patients', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->integer('age');
        $table->string('gender');
        $table->string('phone');
        $table->string('blood_group');
        $table->string('disease');
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patients');
    }
};
