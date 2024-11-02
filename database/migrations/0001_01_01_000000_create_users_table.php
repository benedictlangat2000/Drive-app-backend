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
        Schema::create('users', function (Blueprint $table) {
            $table->id(); // Auto-incrementing ID
            $table->string('name'); // User's name
            $table->string('email')->unique(); // Unique email address
            $table->string('phone_number')->unique(); // Unique phone number
            $table->string('password'); // Password field for storing hashed PIN
            $table->rememberToken(); // Token for "remember me" functionality
            $table->timestamps(); // Timestamps for created_at and updated_at
        });

        // Password reset tokens table
        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary(); // Primary key for email
            $table->string('token'); // Token for password reset
            $table->timestamp('created_at')->nullable(); // Timestamp for token creation
        });

        // Sessions table
        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary(); // Unique session ID
            $table->foreignId('user_id')->nullable()->index(); // Foreign key for user
            $table->string('ip_address', 45)->nullable(); // IP address of the user
            $table->text('user_agent')->nullable(); // User agent information
            $table->longText('payload'); // Session data
            $table->integer('last_activity')->index(); // Timestamp of last activity
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sessions'); // Drop sessions table first
        Schema::dropIfExists('password_reset_tokens'); // Drop password reset tokens table
        Schema::dropIfExists('users'); // Finally, drop users table
    }
};
