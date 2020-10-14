<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJajaranPengurusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jajaran_penguruses', function (Blueprint $table) {
            $table->id();
            $table->string("uuid");
            $table->string("nama");
            $table->string("posisi")->unique();
            $table->integer("type")->default(0);
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
        Schema::dropIfExists('jajaran_penguruses');
    }
}
