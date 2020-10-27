<?php

use App\Services\FilmsFilter;

class FilmsFilterTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testOrderView()
    {

        $films = array(
            (object) array( 'title'=> 'Return of the Jedi',         'episode_id' => 6),
            (object) array( 'title'=> 'The Phantom Menace',         'episode_id' => 1),
            (object) array( 'title'=> 'The Empire Strikes Back',    'episode_id' => 5),
            (object) array( 'title'=> 'Revenge of the Sith',        'episode_id' => 3),
            (object) array( 'title'=> 'Attack of the Clone',        'episode_id' => 2),
            (object) array( 'title'=> 'A New Hope',                 'episode_id' => 4 )
        );
        
        $filter = new FilmsFilter();    

        $this->assertEquals(
            count($filter->orderByView($films, 'machete')), 5, 'quantidade 5 esperado' 
        );

        $this->assertEquals(
            count($filter->orderByView($films, 'rinster')), 6, 'quantidade 6 esperado' 
        );

        $this->assertEquals(
            $filter->orderByView($films, 'machete')[4]->title, 
            'Return of the Jedi', 
            'Return of the Jedi esperado'
        );


        $this->assertEquals(
            $filter->orderByView($films, 'machete')[0]->title, 
            'A New Hope', 
            'A New Home esperado'
        );
    }
}
