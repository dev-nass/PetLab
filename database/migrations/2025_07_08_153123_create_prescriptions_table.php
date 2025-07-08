<?php

use App\Models\Consultation;
use App\Models\Pet;
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
        
        Schema::create('prescriptions', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Consultation::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Vet::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Pet::class)->constrained()->cascadeOnDelete();
            $table->string('file_path'); // will contain PDF in the storage
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prescriptions');
    }
};
