<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Http;
use App\Models\Personatge;

class PersonatgeSeeder extends Seeder
{
    public function run(): void
    {
        $url = 'https://thesimpsonsapi.com/api/characters';

        $paginas = [1, 2];

        foreach ($paginas as $pagina) {
            $data = Http::get("{$url}?page={$pagina}")->json();

            foreach ($data['results'] as $personatge) {
                Personatge::updateOrCreate(
                    ['id' => $personatge['id']],
                    [
                        'nombre' => $personatge['name'],
                        'genero' => $personatge['gender'],
                        'ocupacion' => $personatge['occupation'],
                        'edad' => $personatge['age'],
                        'fecha_nacimiento' => $personatge['birthdate'],
                        'estado' => $personatge['status'],
                        'ruta_imagen' => $personatge['portrait_path'],
                        'frases' => $personatge['phrases'],
                    ]
                );
            }
        }
    }
}
