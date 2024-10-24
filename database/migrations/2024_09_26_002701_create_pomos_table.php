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
        Schema::create('pomos', function (Blueprint $table) {
            $table->id();
            $table->String('Pomo', 20);
            $table->String('descricao', 250)->nullable();
            $table->integer('Qntd_pomos')->default(0);
            $table->integer('Qntd_pomos_feitos')->default(0);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pomos');
    }
};
