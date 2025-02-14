<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Create the 'users' table
        Schema::create('users', function (Blueprint $table) {
            $table->id('users_id');
            $table->enum('role', ['admin', 'employee'])->notNull(); 
            $table->string('Firstname');
            $table->string('Middlename');
            $table->string('Lastname');
            $table->integer('contact_no'); 
            $table->string('Address');
            $table->foreignId('log_id'); 
            $table->foreignId('inventory_id'); 
            // Add foreign key constraints
            $table->foreign('log_id')->references('log_id')->on('activity_logs')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('inventory_id')->references('inventory_id')->on('inventory')->onDelete('cascade')->onUpdate('cascade');

            $table->timestamps(); // Optional: created_at and updated_at columns
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Drop the 'users' table
        Schema::dropIfExists('users');
    }
};
