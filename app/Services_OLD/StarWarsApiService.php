<?php

namespace App\Services_OLD;

use Illuminate\Support\Facades\Http;

class StarWarsApiService
{
    private string $baseUrl = 'https://www.swapi.tech/api';

    public function getPlanets($offset = 0, $limit = 10)
    {
        return Http::get("{$this->baseUrl}/planets?offset={$offset}&limit={$limit}")
            ->json();
    }

    public function getPlanet($id)
    {
        return Http::get("{$this->baseUrl}/planets/{$id}")
            ->json()['result'];
    }
}

//***********************************************************************************************//

// Esto sería lo que habría en el Controlador StarWarsController...
// si estuviésemos usando el servicio StarWarsApiController:
// El código es solo un resumen escueto de lo que habría, pero no es literal ni exacto

/*use App\Services\SwApiService;

class StarWarsController extends Controller
{
    protected $swapi;

    public function __construct(SwApiService $swapi)
    {
        $this->swapi = $swapi;
    }

    public function index()
    {
        $planetas = $this->swapi->getPlanets();
        return view('starwars.index', compact('planetas'));
    }

    public function show($id)
    {
        $planeta = $this->swapi->getPlanet($id);
        return view('starwars.show', compact('planeta'));
    }
}*/


