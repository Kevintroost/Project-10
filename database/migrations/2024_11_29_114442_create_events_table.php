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
$table->string('event_name');
$table->string('event_date');
$table->string('location');
$table->string('event_type');
$table->text('description')->nullable();
$table->string('ticket_link');
$table->string('event_picture');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('events');
    }
}
