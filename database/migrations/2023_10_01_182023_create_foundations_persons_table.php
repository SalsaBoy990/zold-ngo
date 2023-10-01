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
        Schema::create('foundations_persons', function (Blueprint $table) {
            $table->unsignedBigInteger('foundation_id');
            $table->unsignedBigInteger('person_id');

            $table->foreign('foundation_id')
                  ->references('id')
                  ->on('foundations')
                  ->onDelete('cascade');

            $table->foreign('person_id')
                  ->references('id')
                  ->on('persons')
                  ->onDelete('cascade');

            // The position/role the celebrity has in the foundation
            $table->string('position')->nullable();


            $table->timestamps();


            $table->primary(['foundation_id', 'person_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('foundations_persons');
    }
};
