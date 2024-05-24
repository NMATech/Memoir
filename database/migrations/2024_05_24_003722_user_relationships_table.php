<?php

use App\Enums\Relationship;
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
        Schema::create('user_relationships', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('from');
            $table->unsignedBigInteger('to');
            $table->enum('status', [Relationship::FRIEND->value, Relationship::BLOCKED->value, Relationship::FOLLOWING->value]);
            $table->timestamps();

            $table->foreign('to')->references('id')->on('users')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreign('from')->references('id')->on('users')->cascadeOnDelete()->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_relationships');
    }
};
