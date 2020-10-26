<?php

namespace App\Services;

use GuzzleHttp\Client;

class ApiConsumerSWAPI
{
    protected $client;
    protected $endpoint;

    public function __construct()
    {
       $this->client = $this->createHTTPClient();
    }



    public function createHTTPClient($endpoint = null)
    {
        return new Client([
            'base_uri' => 'http://swapi.dev/api/',
            'default' => [
                'exceptions' => false,
                'headers' => [
                    'User-Agent' => 'consume-swapi',
                    'Accept' => 'application/json',
                ],
            ],
        ]);

    }
    

    public function get(): Array
    {
        $request = $this->client->get('films');

        $response = $request->getBody()->getContents();
        $response = json_decode($response);    
             
        return $response->results;
    }
    
}
