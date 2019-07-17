<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableBerita extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('berita', function (Blueprint $table) {
            $table->increments('id');
            $table->string('judulberita', 30);
            $table->string('beritasingkat', 150);
            $table->string('isiberita', 200);
            $table->enum('tampil', ['Y', 'N']);
            $table->enum('tampilutama', ['Y', 'N']);
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
        Schema::dropIfExists('berita');
    }
}
