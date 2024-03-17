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
        Schema::create('ops', function (Blueprint $table) {
            $table->id();
            $table->string('numero');
            $table->string('libelle');
            $table->string('elaboration');
            $table->string('type');
            $table->decimal('montant');
            $table->string('regellement')->default('non');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ops');
    }
};
