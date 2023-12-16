<x-layout>
    
    
    
    <x-header
    
    title="Scrivici quello che vuoi"
    paragrafo="qui potrai inviare la tua mail"
    background="bg-secondary rounded-4 "
    testo="homepage"
    
    ></x-header>
    
    {{-- form --}}
    @if (session('emailErrorSend'))
      <div class="alert alert-danger">
        {{session('emailErrorSend')}}
      </div>
    @endif

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-5">
                <form action="{{route('contact_us_submit')}}" method="POST" class="shadow rounded-4 p-4 bg-secondary text-white" > 
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
                    </div>
                
                    <div class="mb-3">
                        <label for="name" class="form-label">Nome</label>
                        <input type="text" name="name" class="form-control" id="name" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Messaggio</label>
                        <textarea name="message" class="form-control" id="message" cols="30" rows="10"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">invia e-mail</button>
                </form>
            </div>
        </div>
    </div>
    
    
    
    
    
    
</x-layout>