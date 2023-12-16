<x-layout>

  <x-header
  title="{{$movie['title']}}"
  paragrafo="la trama:{{$movie['plot']}}"
  background="bg-secondary rounded-4 "
  testo="home"
  
  
 ></x-header>

    {{-- CARD FILM --}}

 <div class="container ">
    <div class="row  justify-content-center align-items-center mt-5">
      

          <x-card 
          movieTitle="{{$movie['title']}}"
          movieImg="{{$movie['img']}}"
          
          movieId="{{$movie['id']}}"
          testo2="vai ai film"
          ></x-card>

      
         
    </div>
 </div>



</x-layout>