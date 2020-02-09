<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scores', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_student');
            $table->decimal('bahasa_indonesia');
            $table->decimal('matematika');
            $table->decimal('pengetahuan_alam');
            $table->decimal('bahasa_inggris');
            $table->decimal('pendidikan_agama');
            $table->decimal('bahasa_jawa');
            $table->decimal('olahraga');
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
        Schema::dropIfExists('scores');
    }
}
