<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {   
       
        Schema::create('langganans', function (Blueprint $table) {
            $table->string("id")->primary();
            $table->string("judul");
            $table->integer("harga");
            $table->integer("durasi/bulan");
            $table->string("warna")->default("rgb(".rand(0,255).",".rand(0,255).",".rand(0,255).")");
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
        Schema::dropIfExists('langganans');
    }
};
