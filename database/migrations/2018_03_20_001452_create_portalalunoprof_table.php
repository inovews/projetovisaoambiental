<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePortalAlunoProfTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('portalalunoprof', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->integer('author_id');
            $table->string('content');
            $table->string('rate')->nullable();
            $table->string('released');
            $table->string('download')->nullable();
            $table->string('picture')->nullable();
            $table->integer('faculdade_id');
            $table->integer('periodo')->nullable();
            $table->date('data_aula')->nullable();
            $table->string('link')->nullable();
            $table->integer('curso_id');
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
        Schema::dropIfExists('portalalunoprof');
    }
}
