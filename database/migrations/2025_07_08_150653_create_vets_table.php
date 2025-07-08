<?php

use App\Models\User;
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
        Schema::create('vets', function (Blueprint $table) {
            $table->id();            
            $table->foreignIdFor(User::class)->constrained()->cascadeOnDelete();
            $table->string('designation'); // place where they are they working on
            $table->date('years_of_experience');
            $table->string('spoken_languages');
            $table->string('specializations');
            $table->string('available_hours');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vets');
    }
};
