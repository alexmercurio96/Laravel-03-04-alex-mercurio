<x-layout>

  <x-header
  title="I nostri Film"
  paragrafo="Questi sono i film che babi ha a disposizione per te"
  background="bg-secondary rounded-3 "
  testo="homepage"
  
 ></x-header>

    {{-- CARD FILM --}}

 <div class="container d-flex justify-content-center align-items-center">
    <div class="row mt-5">

       @foreach($movies as $movie)

          <x-card 
          movieTitle="{{$movie['title']}}"
          movieImg="{{$movie['img']}}"
          moviePlot="{{$movie['plot']}}"
          movieId="{{$movie['id']}}"
          testo2="vai al film"
          ></x-card>

       @endforeach

    </div>
 </div>



</x-layout>
