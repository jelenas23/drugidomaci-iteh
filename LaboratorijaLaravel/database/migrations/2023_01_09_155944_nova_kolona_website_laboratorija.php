<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class NovaKolonaWebsiteLaboratorija extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('laboratorijas', function (Blueprint $table) {
            $table->after('email', function ($table) {
                $table->string('website')->unique();
            });
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
            $table->dropColumn('website');
        });
    }
}
