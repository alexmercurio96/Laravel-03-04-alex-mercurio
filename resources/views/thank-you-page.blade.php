
<x-layout>

<div>
    <div class="container my-5">
        <div class="row justify-content-center">
         <h1>Grazie per averci scritto</h1>
        </div>
    </div>
</div>
<div>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
               <h2>Ecco un resoconto della tua rischiesta</h2>
                <ul class="my-4">
                    <li> Nome :  {{session('name')}}</li>
                    <li> E-mail :  {{session('email')}}</li>
                    <li> Messaggio :  {{session('message')}}</li>
                </ul>
            </div>
        </div>
    </div>
</div>
         

</x-layout>