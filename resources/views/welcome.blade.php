<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

         <link rel="manifest" href="manifest.json" />
 <script async src="https://cdn.jsdelivr.net/npm/pwacompat@2.0.8/pwacompat.min.js"
     integrity="sha384-uONtBTCBzHKF84F6XvyC8S0gL8HTkAPeCyBNvfLfsqHh+Kd6s/kaS4BdmNQ5ktp1"
     crossorigin="anonymous"></script>
     





        <title>Cupitter</title>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">


    </head>
    <body>
            <v-app id="app">

                <top-component/>
                
            </v-app> 
        <script src="{{asset('js/app.js')}}"></script>
<!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="https://www.gstatic.com/firebasejs/7.12.0/firebase-app.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->
<script src="https://www.gstatic.com/firebasejs/7.12.0/firebase-analytics.js"></script>

<script>
  // Your web app's Firebase configuration
  var firebaseConfig = {
    apiKey: "AIzaSyCte0O6BS5sVHQ-n24sDxD1RATTYIInO1I",
    authDomain: "cupitter.firebaseapp.com",
    databaseURL: "https://cupitter.firebaseio.com",
    projectId: "cupitter",
    storageBucket: "cupitter.appspot.com",
    messagingSenderId: "1079611811868",
    appId: "1:1079611811868:web:ff7ebd09ebfcc8355617d9",
    measurementId: "G-G6NZ3QDBMQ"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);
  firebase.analytics();

  
</script>
    </body>
</html>