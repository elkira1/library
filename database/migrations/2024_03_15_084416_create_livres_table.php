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
        Schema::create('livres', function (Blueprint $table) {
            $table->string('ISBN');
            $table->string('Title');
            $table->string('Author');
            $table->string('Category');
            $table->string('PublisherYear');
            $table->string('PageNbr');
            $table->string('Editor');
            $table->string('Language');

            $table->unsignedBigInteger('fournisseur_id');
            $table->foreign('fournisseur_id')
                ->references('id')->on('fournisseurs');

            $table->string('Statut');

            $table->string('Cover');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('livres');
    }
};
