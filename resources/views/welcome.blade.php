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
                    <div id="top">
                    <v-btn >
                        <a href="{{ route('register') }}" class="btn-gradient-3d-simple">会員登録</a>
                    </v-btn>
                    <v-btn>
                        <a href="{{ route('login') }}" class="btn-gradient-3d-simple2">ログイン</a>
                    </v-btn>
                </div>
                <div id="nav">
                <router-link to="/">Home</router-link>
                <router-link to="/about">About</router-link>
                <router-link to="/user">ユーザ一覧</router-link>
                </div>
                <router-view/>
                <!-- <example-component/> -->
          
            </v-app> 
        <script src="{{asset('js/app.js')}}"></script>
    </body>
</html>