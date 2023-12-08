<x-layout>

   

    {{-- CARD FILM --}}

 <div class="container d-flex justify-content-center align-items-center">
    <div class="row mt-5">

      @foreach ($movies as $movie)
          <div class="col-12 col-md-4">
            <div class="card mt-5 d-flex" style="width: 18rem;">
                <img src="{{$movie['img']}}" class="card-img-top" alt="{{$movie['title']}}">
                <div class="card-body">
                  <h5 class="card-title">{{$movie['title']}}</h5>
                  <p class="card-text">La trama: {{$movie['plot']}}</p>
                  <a href="#" class="btn btn-primary">vai al film</a>
                </div>
              </div>
          </div>

      @endforeach

    </div>
 </div>



</x-layout>
