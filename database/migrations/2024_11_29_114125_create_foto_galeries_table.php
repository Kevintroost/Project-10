<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFotoGaleriesTable extends Migration
{
    public function up()
    {
        Schema::create('foto_galeries', function (Blueprint $table) {
            $table->id();
            $table->string('foto');
            $table->foreignId('admin_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('foto_galeries');
    }
}
