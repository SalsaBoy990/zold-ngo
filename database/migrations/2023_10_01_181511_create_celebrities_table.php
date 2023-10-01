<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('celebrities', function (Blueprint $table) {
            $table->id();

            // First name
            $table->string('first_name');

            // Last name
            $table->string('last_name');

            // Title (optional)
            $table->string('title')->nullable();

            // Main qualification (optional)
            $table->string('qualification')->nullable();

            // Email address (optional)
            $table->string('email')->nullable();

            // Phone number (optional)
            $table->string('phone')->nullable();

            // Website
            $table->string('website')->nullable();

            // Profile
            $table->text('content');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('celebrities');
    }
};
