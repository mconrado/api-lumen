<?php

namespace App\Services;

class FilmsFilter
{

    private $orderDict;
     
    public function __construct()
    {
        $this->orderDict = array(
            'lucas'     => array(1,2,3,4,5,6),
            'release'   => array(4,5,6,1,2,3),
            'rinster'   => array(4,5,1,2,3,6),
            'machete'   => array(4,5,2,3,6),
            'magnota'   => array(4,5,1,2,3,6),
            'lee'       => array(4,5,6,1,2,3)
        );
    }



    public function orderByView(Array $films, string $view): Array
    {
        $viewOrder = $this->orderDict[$view];
        $filmsOrdered = array();



        foreach ($films as $film) 
        {
            if (in_array($film->episode_id, $viewOrder))
            {
                $position = array_search($film->episode_id, $viewOrder);
                $filmsOrdered[$position] = $film;
            }
        }

        return $filmsOrdered;    
    }
}
