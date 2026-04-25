<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class TheSimpsomsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    /*public function index()
    {
        // PARA PRUEBAS: VEMOS QUE DATOS NOS DEVUELVE EL ENDPOINT:
        $response = Http::get('https://thesimpsonsapi.com/api/characters');
        $characters = $response->json();
        dd($characters); // ← AÑADE ESTO
    }*/
    public function index()
    {
        $response = Http::get('https://thesimpsonsapi.com/api/characters');

        if (! $response->successful()) {
            return view('thesimpsoms.index', ['characters' => []]);
        }

        $data = $response->json();
        $characters = $data['results'] ?? [];

        $characters = array_map(function ($item) {

            // Imagen por defecto SIEMPRE (el CDN no funciona)
            $defaultImage = asset('assets/img/default_simpsons.png');

            return [
                'id'         => $item['id'],
                'name'       => $item['name'] ?? 'Desconocido',
                'image'      => $defaultImage,
                'quote'      => $item['phrases'][0] ?? 'Sin frase',
                'gender'     => $item['gender'] ?? 'Desconocido',
                'occupation' => $item['occupation'] ?? 'Desconocida',
                'status'     => $item['status'] ?? 'Desconocido',
            ];
        }, $characters);

        return view('thesimpsoms.index', compact('characters'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $response = Http::get("https://thesimpsonsapi.com/api/characters/{$id}");

        if (! $response->successful()) {
            abort(404, 'Personaje no encontrado');
        }

        $data = $response->json();

        $character = [
            'id'         => $data['id'],
            'name'       => $data['name'] ?? 'Desconocido',
            'image'      => asset('assets/img/default_simpsons.png'),
            'quote'      => $data['phrases'][0] ?? 'Sin frase',
            'gender'     => $data['gender'] ?? 'Desconocido',
            'occupation' => $data['occupation'] ?? 'Desconocida',
            'status'     => $data['status'] ?? 'Desconocido',
            'age'        => $data['age'] ?? 'Desconocida',
            'birthdate'  => $data['birthdate'] ?? 'Desconocida',
        ];

        return view('thesimpsoms.show', compact('character'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
