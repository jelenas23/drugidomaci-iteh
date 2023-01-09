<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIzvestajsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('izvestajs', function (Blueprint $table) {
            $table->id();
            $table->string('ime_pacijenta');
            $table->date('datum');
            $table->string('komentar');
            $table->foreignId('izvestaj_id')->constrained('izvestajs');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('izvestajs');
    }
}
