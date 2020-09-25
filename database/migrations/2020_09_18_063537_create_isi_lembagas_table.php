<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIsiLembagasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('isi_lembagas', function (Blueprint $table) {
            $table->id();
            $table->longText("deskripsi");
            $table->unsignedBigInteger("lembaga_id");
            $table->timestamps();

            $table->foreign("lembaga_id")->references("id")->on("lembagas")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('isi_lembagas');
    }
}
