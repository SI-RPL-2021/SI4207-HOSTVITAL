<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKamarinapTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kamarinap', function (Blueprint $table) {
            $table->id();
            $table->integer("id_rumahsakit");
            $table->string("nama");
            $table->text("deskripsi");
            $table->integer("tersedia");
            $table->integer("harga");
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
        Schema::dropIfExists('kamarinap');
    }
}
