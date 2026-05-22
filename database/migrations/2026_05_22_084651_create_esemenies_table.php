<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Esemeny;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('esemenies', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kategoria_id')->constrained('kategorias');
            $table->String('esemeny_nev');
            $table->Text('leiras');
            $table->integer('resztvevok');
            $table->integer('ar');
            $table->String('kepUrl');
            $table->timestamps();
        });

        Esemeny::create([
            'kategoria_id' => 1,
            'esemeny_nev' => 'Abszrakt festmények kiállítás',
            'leiras' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'resztvevok' => 15, 
            'ar' => 12055,
            'kepUrl' => '/kepek/kiallitas.jpg'
        ]); 

        Esemeny::create([
            'kategoria_id' => 2,
            'esemeny_nev' => 'Nyárindító koncert',
            'leiras' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'resztvevok' => 195, 
            'ar' => 42055,
            'kepUrl' => '/kepek/koncert.jpg'
        ]);      
        
        Esemeny::create([
            'kategoria_id' => 1,
            'esemeny_nev' => 'Hamlet',
            'leiras' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'resztvevok' => 63, 
            'ar' => 1090,
            'kepUrl' => '/kepek/szinhaz.jpg'
        ]);
        
        Esemeny::create([
            'kategoria_id' => 3,
            'esemeny_nev' => 'Hogyan csináld?',
            'leiras' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'resztvevok' => 21, 
            'ar' => 35000,
            'kepUrl' => '/kepek/workshop.jpg'
        ]);        
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('esemenies');
    }
};
