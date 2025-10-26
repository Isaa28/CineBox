<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('sessions', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->id('movie_id');
            $table->id('rooms_id');
            $table->string('date_time');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('sessions');
    }
};
