<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUtilisateursTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('utilisateurs', function (Blueprint $table) {
            $table->id();
            $table->string('nom', 100)->nullable();
            $table->string('prenom', 100)->nullable();
            $table->string('email', 150)->unique();
            $table->string('mot_de_passe');
            $table->text('biographie')->nullable();
            $table->text('img')->nullable();
            $table->string('google_scholar')->nullable();
            $table->boolean('is_admin')->default(false);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('utilisateurs');
    }
};
