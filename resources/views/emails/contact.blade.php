<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Messaggio</title>
    <style>
   .h1-custom{
     
     color: darkgreen;
     font-family: Verdana, Geneva, Tahoma, sans-serif;
      }
    </style>
</head>
<body>
    

        <div class="container">
            <div class="row justify-content-center my-5">
                <div class="col-12 col-md-5">

                    <h1 class="h1-custom">Grazie per averci contattato {{$name_user}}</h1>

                    <h2>un nostro collaboratore ti risponderà il prima possibile</h2>
                     
                    <ul>
                        <li> Email : {{$email_user}}</li>
                        <li> Messaggio : {{$message_user}}</li>
                    </ul>

                </div>
            </div>
        </div>
    


</body>
</html>