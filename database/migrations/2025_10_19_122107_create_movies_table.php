<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('title');
            $table->string('genre');
            $table->string('director');
            $table->time('duration');
            $table->foreignId('user_id')->constrained()->onDelete('cascade');

        });
    }

    public function down(): void
    {
        Schema::dropIfExists('movies');
    }
};
