<?php

use App\Models\Pet;
use App\Models\User;
use App\Models\Vet;
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
        
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class)->constrained()->cascadeOnDelete();
            $table->foreignFor(Vet::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Pet::class)->constrained()->cascadeOnDelete();
            $table->dateTime('consultation_date');
            $table->string('type'); // listed on obsidian
            $table->string('mode'); // in-person,video,chat
            $table->string('status')->default('pending'); // pending,rejected,confirmed
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointments');
    }
};
