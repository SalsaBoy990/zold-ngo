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
        Schema::create('finances', function (Blueprint $table) {
            $table->id();


            // Fiscal year of the organization
            $table->unsignedInteger('year');

            // All assets value
            $table->double('assets', 20, 2);

            // All revenue
            $table->double('revenue', 20, 2);

            // All expenses
            $table->double('expenses', 20, 2);

            // All liabilities
            $table->double('liabilities', 20, 2);

            // Tax form external link
            $table->string('tax_form');

            // Tax form saved document
            $table->string('tax_document');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('finances');
    }
};
