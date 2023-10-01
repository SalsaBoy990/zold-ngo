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
        Schema::create('quotes', function (Blueprint $table) {
            $table->id();

            // Quote can belong to an organization, a person, or a celebrity
            // Todo: Need constraint to only allow one FK filled (the others should be null)
            $table->unsignedBigInteger('organization_id')->nullable();
            $table->unsignedBigInteger('person_id')->nullable();
            $table->unsignedBigInteger('celebrity_id')->nullable();

            // The exact text of the quote
            $table->string('content', 1000);


            $table->timestamps();


            $table->foreign('organization_id')->references('id')->on('organizations');
            $table->foreign('person_id')->references('id')->on('persons');
            $table->foreign('celebrity_id')->references('id')->on('celebrities');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quotes');
    }
};
