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
        Schema::create('retourners', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('lecteur_id');
            $table->foreign('lecteur_id')
                ->references('id')->on('lecteurs');

            $table->unsignedBigInteger('personnel_id');
            $table->foreign('personnel_id')
                  ->references('id')->on('personnels');

            $table->unsignedBigInteger('emprunt_id');
            $table->foreign('emprunt_id')
                  ->references('id')->on('emprunts');

            $table->unsignedBigInteger('exemplaire_id');
            $table->foreign('exemplaire_id')
                 ->references('id')->on('exemplaires');

            $table->string('Statut');

            $table->string('DateReturn');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('retourners');
    }
};
