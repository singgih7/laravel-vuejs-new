<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListAnggaranModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('list_anggaran_models', function (Blueprint $table) {
            $table->id();
            $table->string('mataanggaran');
            $table->integer('totalanggaran');
            $table->integer('konsumsianggaran');
            $table->integer('sisaanggaran');
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
        Schema::dropIfExists('list_anggaran_models');
    }
}
