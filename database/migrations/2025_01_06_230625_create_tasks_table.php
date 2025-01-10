<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id(); // Automatically creates an auto-incrementing primary key
            $table->string('title'); // Task title
            $table->text('description')->nullable(); // Task description (nullable)
            $table->boolean('completed')->default(false); // Task status (completed or not)
            $table->json('list_items')->nullable(); // A JSON field for storing list items
            $table->enum('section', ['to_do', 'in_progress', 'completed'])->default('to_do'); // Section (could be a enum or string)
            $table->timestamps(); // Created_at and updated_at fields
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tasks');
    }
}
