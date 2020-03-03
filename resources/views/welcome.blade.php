<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">


        <title>Laravel</title>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">


    </head>
    <body>
            <v-app id="app">
            <router-view name= "header"></router-view>
            <v-content>
                
                <router-link to="/">Home</router-link>
                <router-link to="/about">About</router-link>
                <router-link to="/user">ユーザ一覧</router-link>
                
                
                
                <router-view />
                </v-content>
                <!-- <example-component/> -->
                
            </v-app> 
        <script src="{{asset('js/app.js')}}"></script>
        
    </body>
</html>