<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ApiConsumerSWAPI;

class MovieController extends Controller
{
    public function index(ApiConsumerSWAPI $apiConsumerSWAPI)
    {
        dd($apiConsumerSWAPI->get());
    }

}
