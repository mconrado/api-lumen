<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ApiConsumerSWAPI;
use App\Models\Film;

class MovieController extends Controller
{
    public function index(Request $request, ApiConsumerSWAPI $apiConsumerSWAPI)
    {

        $mapper = new \JsonMapper();
        $filmsJson = $apiConsumerSWAPI->get();



        $filmsArray = $mapper->mapArray(
            $filmsJson, array(), 'App\Models\Film' 
        );

        dd($filmsArray);
    }

}
