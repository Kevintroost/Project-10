<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
$table->string('event-name');
$table->string('event-date');
$table->string('location')->nullable();
$table->string('event-type');
$table->text('description')->nullable();
$table->string('ticket-link');
$table->string('event-picture');
            $table->boolean('is_scraped')->default(false);
            $table->foreignId('scrapper_id')->nullable()->constrained()->onDelete('set null');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('events');
    }
}
