<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MovieController extends Controller
{
    public $movies = [
        [
          'id' => 1,
          'title' => 'Halloween',
          'plot' => 'Uno si è svegliato ed ha iniziato a uccidere gente',
          'director' => 'David Gordon Green',
          'genere' => 'Horror',
          'released_at'=> 2018,
          'img' => '/img/halloween.jpg'
        ],
        [
            'id' => 2,
            'title' => 'Due sballati al college',
            'plot' => 'Dal titolo si dovrebbe capire',
            'director' => 'Method MAN',
            'genere' => 'Da ridere',
            'released_at'=> 2001,
            'img' => '/img/sballati.jpg'
          ],
          [
            'id' => 3,
            'title' => 'Hulk',
            'plot' => 'Uomo verde enorme che spacca tutto',
            'director' => 'Ang Lee',
            'genere' => 'Fantasy',
            'released_at'=> 2011,
            'img' => '/img/hulk.jpg'
          ],
          [
            'id' => 4,
            'title' => 'Babi',
            'plot' => 'Cane che mangia e dorme',
            'director' => 'Alex mercurio',
            'genere' => 'Horror',
            'released_at'=> 2024,
            'img' => '/img/babi.jpg'
          ],
          [
            'id' => 5,
            'title' => 'Fantozzi contro tutti',
            'plot' => 'un uomo fuori dagli schemi',
            'director' => 'Paolo villaggio',
            'genere' => 'comico',
            'released_at'=> 1980,
            'img' => '/img/fantozzi.jpg'
          ],
         
        ];


    public function moviesIndex(){
     
      return view('movies-index',['movies'=> $this->movies]);
    }



    public function moviesDetail($id){
     
      foreach ($this->movies as $movie) {
         if($movie['id'] == $id){
         return view('movies-detail',['movie'=> $movie]);
         }
      }


      abort (404);
    }
}
