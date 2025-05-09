<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class UpdateMotDePasseFieldToBeNullable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('utilisateurs', function (Blueprint $table) {
            $table->string('mot_de_passe')->nullable()->change();
            $table->string('nom')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        // Update records with NULL values to avoid constraint violations
        DB::table('utilisateurs')->whereNull('nom')->update(['nom' => '']);
        DB::table('utilisateurs')->whereNull('mot_de_passe')->update(['mot_de_passe' => '']);

        // Change the table structure
        Schema::table('utilisateurs', function (Blueprint $table) {
            $table->string('nom')->nullable(false)->change();
            $table->string('mot_de_passe')->nullable(false)->change();
        });
    }
};
