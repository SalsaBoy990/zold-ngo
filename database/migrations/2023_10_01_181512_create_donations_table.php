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
        Schema::create('donations', function (Blueprint $table) {
            $table->id();


            // What is the donation for?
            $table->string('title');

            // More details about the donation
            $table->string('description');

            // Source of data
            $table->string('external_link');

            // Archived source of data
            $table->string('archived_link')->nullable();

            // Donated amount
            $table->double('total_donation', 20, 2);

            // Donation currency
            $table->string('currency_code', 20)->default('EUR');

            // Year of the donation
            $table->unsignedInteger('year');

            // Exact date of the donation (optional)
            $table->date('exact_date')->nullable();

            // Saved document file url (from external source)
            $table->string('document')->nullable();

            // External link of the document
            $table->string('external_document')->nullable();


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('donations');
    }
};
