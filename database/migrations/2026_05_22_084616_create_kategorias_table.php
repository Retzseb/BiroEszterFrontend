<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Kategoria;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('kategorias', function (Blueprint $table) {
            $table->id();
            $table->String('kategoria_nev');
            $table->timestamps();
        });

        Kategoria::create([
            'kategoria_nev' => 'kultúra',
        ]);

        Kategoria::create([
            'kategoria_nev' => 'zene',
        ]);

        Kategoria::create([
            'kategoria_nev' => 'oktatás',
        ]);        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kategorias');
    }
};
