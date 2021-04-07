<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRumahsakitTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rumahsakit', function (Blueprint $table) {
            $table->id();
            $table->string("nama");
            $table->string("website");
            $table->string("notelp");
            $table->text("googlemapembed");
            $table->text("alamat");
            $table->text("deskripsi");
            $table->string("foto");
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
        Schema::dropIfExists('rumahsakit');
    }
}
