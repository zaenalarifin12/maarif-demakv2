<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEprintsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eprints', function (Blueprint $table) {
            $table->id();
            $table->string("banner");
            $table->string("judul");
            $table->text("deskripsi");
            $table->unsignedBigInteger("mata_pelajaran_id")->nullable();
            $table->unsignedBigInteger("category_program_kegiatan_id")->nullable();
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
        Schema::dropIfExists('eprints');
    }
}
