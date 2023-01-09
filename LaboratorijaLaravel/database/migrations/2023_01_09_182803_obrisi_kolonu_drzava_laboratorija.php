<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ObrisiKolonuDrzavaLaboratorija extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('laboratorijas', function (Blueprint $table) {
            $table->dropColumn('drzava');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('laboratorijas', function (Blueprint $table) {
            $table->after('adresa', function ($table) {
                $table->string('drzava');
            });

        });
    }
}
