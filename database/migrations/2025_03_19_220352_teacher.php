<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        schema::create('teachers',function(Blueprint $table){
            $table->id();
            $table->string('fullName');
            $table->json('grades'); //update later (either split into another table or figure out something else)
            $table->timestamps();
        });
    }

    public function down(): void
    {
        schema::dropIfExists('teachers');
    }
};
