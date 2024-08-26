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
        Schema::create('emprunts', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('lecteur_id');
            $table->foreign('lecteur_id')
                ->references('id')->on('lecteurs');

            $table->unsignedBigInteger('exemplaire_id');
            $table->foreign('exemplaire_id')
                 ->references('id')->on('exemplaires');


            $table->string('Statut');

            $table->string('DateEmprunt');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('emprunts');
    }
};
