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
        Schema::create('organizations_foundations_donations', function (Blueprint $table) {
            $table->unsignedBigInteger('organization_id');
            $table->unsignedBigInteger('foundation_id');
            $table->unsignedBigInteger('donation_id');

            $table->foreign('organization_id')
                  ->references('id')
                  ->on('organizations')
                  ->onDelete('cascade');

            $table->foreign('foundation_id')
                  ->references('id')
                  ->on('foundations')
                  ->onDelete('cascade');

            $table->foreign('donation_id')
                  ->references('id')
                  ->on('donations')
                  ->onDelete('cascade');


            $table->primary(['organization_id', 'foundation_id', 'donation_id']);


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('organizations_foundations_donations');
    }
};
