<?php

namespace App\Http\Controllers;

use App\Models\Personatge;

class PersonatgeController extends Controller
{
    public function index()
    {
        $personatge = Personatge::inRandomOrder()->first();
        $frase = null;
        if (!empty($personatge->frases)) {
            $frase = collect($personatge->frases)->random();
        }
        return view('welcome', compact('personatge', 'frase'));
    }

    public function show($id)
    {
        $personatge = Personatge::findOrFail($id);
        return view('personatge', compact('personatge'));
    }
}
