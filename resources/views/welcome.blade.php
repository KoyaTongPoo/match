<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

         <link rel="manifest" href="manifest.json" />
 <script async src="https://cdn.jsdelivr.net/npm/pwacompat@2.0.8/pwacompat.min.js"
     integrity="sha384-uONtBTCBzHKF84F6XvyC8S0gL8HTkAPeCyBNvfLfsqHh+Kd6s/kaS4BdmNQ5ktp1"
     crossorigin="anonymous"></script>
     





        <title>Laravel</title>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">


    </head>
    <body>
            <v-app id="app">

                <example-component/>
                
            </v-app> 
        <script src="{{asset('js/app.js')}}"></script>
        
    </body>
</html>