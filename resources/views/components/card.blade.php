

<div class="col-12 col-md-4 d-flex justify-content-center align-items-center">
    <div class="card mt-5 card-custom " style="width: 18rem;">
        <img src="{{$movieImg}}" class="card-img-top img-custom" alt="{{$movieTitle}}">
        <div class="card-body">
          <h5 class="card-title">{{$movieTitle}}</h5>
          {{-- <p class="card-text">La trama: {{$moviePlot}}</p> --}}
          @if (Route::currentRouteName()!='moviesIndex')

          <a href="{{route('moviesIndex')}}" class="btn btn-primary">{{$testo2}}</a>
          
          @else

          <a href="{{route('moviesDetail',['id'=> $movieId])}}" class="btn btn-primary">{{$testo2}}</a>
          
          @endif
        </div>
    </div>
</div>

