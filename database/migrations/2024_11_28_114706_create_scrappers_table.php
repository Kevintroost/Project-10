<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScrappersTable extends Migration
{
    public function up()
    {
        Schema::create('scrappers', function (Blueprint $table) {
            $table->id();
            $table->string('source_url');
            $table->timestamp('last_run_at')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('scrappers');
    }
}
