<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PromenaNazivaImepacijentaIzvestaj extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('izvestajs', function (Blueprint $table) {
            $table->renameColumn('ime_pacijenta', 'pacijent');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('izvestajs', function (Blueprint $table) {
            $table->renameColumn('pacijent', 'ime_pacijenta');
        });
    }
}
