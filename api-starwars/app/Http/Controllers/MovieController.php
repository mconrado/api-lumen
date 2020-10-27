<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ApiConsumerSWAPI;
use App\Services\FilmsFilter;
use App\Models\Film;

class MovieController extends Controller
{
    public function index(Request $request, ApiConsumerSWAPI $apiConsumerSWAPI)
    {

        $mapper = new \JsonMapper();
        $filmsFilter = new FilmsFilter();

        $filmsJson = $apiConsumerSWAPI->get();

        $filmsArray = $mapper->mapArray(
            $filmsJson, array(), 'App\Models\Film' 
        );

        $view = $request->get('order');
        $orderedFilms = $filmsFilter->orderByView($filmsArray, $view);

        return response()->json($orderedFilms);
    }

}
