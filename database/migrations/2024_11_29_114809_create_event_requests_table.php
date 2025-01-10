<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventRequestsTable extends Migration
{
    public function up()
    {
        Schema::create('event_requests', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->text('details');
            $table->string('date');
            $table->string('location');
            $table->enum('status', ['To-Do', 'In Progress', 'Done'])->default('To-Do');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('event_requests');
    }
}
