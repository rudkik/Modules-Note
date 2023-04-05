<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotesTable extends Migration
{
    public function up()
    {
        Schema::create('notes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('questions')->nullable();
            $table->longText('answer')->nullable();
            $table->integer('top')->nullable();
            $table->integer('bottom')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
