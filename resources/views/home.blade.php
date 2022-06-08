<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>laravel-primi-passi</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
         <style>
            .txt_center{
                text-align: center;
            }

            .txt_left{
                text-align:left;
            }

            .pt_6{
                padding-top: 6rem;
            }

            ul{
                list-style: none;
                padding:0;
            }
        </style>
    </head>
    
    
    <body>
        <header>

            <nav>

                <a href="/home">Home</a>
                <a href="/about">About me</a>
                <a href="/contacts">Contacts</a>

            </nav>
            
        </header>
        
        <main>

            <h1 class="txt_center pt_6">Hello World</h1>
    
            <ul class="txt_center">
    
                @foreach($personas as $key => $persona)
    
                    <li>{{$key}} : {{$persona}}</li>
    
                @endforeach
                
            </ul> 

        </main> 
    </body>
</html>
