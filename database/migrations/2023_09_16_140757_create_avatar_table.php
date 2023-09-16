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
        Schema::create('avatar', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->string('path', 250);
            $table->bigInteger('profile_id')->unsigned()->nullable();
            $table->foreign('profile_id')->references('id')->on('profile')->onDelete("CASCADE");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('avatar');
    }
};
