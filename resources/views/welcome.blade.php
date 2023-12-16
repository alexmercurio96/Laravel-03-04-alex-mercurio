
<x-layout>



    <div class="container my-5 bg-dark rounded-5" data-bs-theme="dark">

        <div class="p-5 text-center rounded-3">
          <svg class="bi mt-4 mb-3" style="color: var(--bs-indigo);" width="100" height="100"><use xlink:href="#bootstrap"></use></svg>
          <h1 class="text-body-emphasis">THE BABI'S CINEMA</h1>
          <p class="col-lg-8 mx-auto fs-5 text-muted">
            Questo è il mio cinema e qui troverai tutti i film di cui tu hai bisogno.
          </p>
           <div class="d-inline-flex gap-2 mb-5">
            <button class="btn btn-primary btn-lg px-4 rounded-pill" type="button">
              <a class="nav-link align-items-center" href="{{route('moviesIndex')}}">tutti i film</a>
            </button>
          </div>
        </div>
      </div>
 
      @if (session('sendEmailSucces'))
      
      <div class="alert alert-success fixed-top text-center bold " id="alert">
          {{ session('sendEmailSucces') }} <button type="button" class="btn-close mx-2" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
  @endif

</x-layout>

