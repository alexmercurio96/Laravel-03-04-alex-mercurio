<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cinema</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
  </head>
  <body>

    <x-navbar></x-navbar>

{{-- SLOT è una chiave di blade per indicare per indicare la posizione esatta di dove voglio mostrare il contenuto abbracciato da questo componente --}}
{{$slot}}


    <x-footer></x-footer>
    

</body>
</html>
