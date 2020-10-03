<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLicensisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('licensis', function (Blueprint $table) {
            $table->string("nama")->nullable();
            $table->string("alamat")->nullable();
            $table->string("email")->nullable();
            $table->string("telepone")->nullable();
            $table->string("faks")->nullable();
            $table->string("jadwal")->nullable();
            $table->string("hotline")->nullable();
            $table->string("facebook")->nullable();
            $table->string("instagram")->nullable();
            $table->string("youtube")->nullable();
            $table->string("twitter")->nullable();
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
        Schema::dropIfExists('licensis');
    }
}
