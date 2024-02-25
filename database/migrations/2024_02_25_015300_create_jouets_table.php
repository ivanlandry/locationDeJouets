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
        Schema::create('jouets', function (Blueprint $table) {
            $table->id();
            $table->string("nom")->nullable(false);
            $table->text("description")->nullable(false);
            $table->text("images")->nullable("false");
            $table->integer('age')->nullable(false);
            $table->text("caracteristiques")->nullable(false);
            $table->boolean("statut")->default(true);
            $table->unsignedBigInteger("categorie_id");
            $table->foreign("categorie_id")->references("id")->on("categories");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jouets');
    }
};
