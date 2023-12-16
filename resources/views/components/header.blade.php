
{{-- HEADER HOMEPAGE --}}

<div class="container my-5  py-2  {{$background}}" data-bs-theme="dark">

    <div class="p-4 text-center rounded-4">
      <svg class="bi mt-4 mb-3" style="color: var(--bs-indigo);" width="100" height="100"><use xlink:href="#bootstrap"></use></svg>
      <h1 class="text-body-emphasis">{{$title}}</h1>
      <p class="col-lg-8 mx-auto fs-5 text-muted">
        {{$paragrafo}}
      </p>
       <div class="d-inline-flex gap-2 mb-5">
          
          <button class="d-flex  btn btn-primary btn-lg rounded-pill btn-custom"  type="button">
          <a class="nav-link align-items-center" href="{{route('homepage')}}">{{$testo}}</a>
          
          <svg class="bi ms-2" width="0" height="24"><use xlink:href="#arrow-right-short"></use></svg>
        </button>
        <button class="btn btn-primary btn-lg px-4 rounded-pill" type="button">
          <a class="nav-link align-items-center" href="{{route('moviesIndex')}}">tutti i film</a>
        </button>
      </div>
    </div>
  </div>