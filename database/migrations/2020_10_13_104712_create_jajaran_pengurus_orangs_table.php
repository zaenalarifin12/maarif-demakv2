<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJajaranPengurusOrangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jajaran_pengurus_orangs', function (Blueprint $table) {
            $table->id();
            $table->string("uuid");
            $table->string("nama");
            $table->string("foto");
            $table->unsignedBigInteger("jajaran_pengurus_id");
            $table->timestamps();

            // $table->foreign("jajaran_pengurus_id")->references("id")->on("jajaran_penguruses")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jajaran_pengurus_orangs');
    }
}
