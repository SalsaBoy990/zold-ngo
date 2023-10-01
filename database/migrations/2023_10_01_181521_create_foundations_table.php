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
        Schema::create('foundations', function (Blueprint $table) {
            $table->id();


            // Foundation name
            $table->string('name');

            // Foundation profile
            $table->text('content');

            // Foundation website
            $table->string('website');

            // Foundation city
            $table->string('city');

            // Foundation address
            $table->string('address');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('foundations');
    }
};
