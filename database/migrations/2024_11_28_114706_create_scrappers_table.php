<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScrappersTable extends Migration
{
    public function up()
    {
        Schema::create('scrapper', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('link');
            $table->string('date');
            $table->timestamp('last_run_at')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('scrappers');
    }
}
