<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link href="/css/main.css" rel="stylesheet">
       <!-- 
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */ </style>
        -->
       

    </head>
    <body>
       @yield('content')
       <footer>
         Copyrights 2020 Pizza House
       </footer>
    </body>
</html>