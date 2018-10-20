<!DOCTYPE html>
<html lang="en">
    <head>
        @include('layout.partials.head')
        @section('style')
        <link href="/css/card.css" rel="stylesheet">
        @show
    </head>
    <body  style="background-image: url(back1.jpg);background-repeat: no-repeat;
           background-size:cover;background-position: center center;">
        <div class='container-fluid' >
            @include('layout.partials.nav')
            @yield('content')
        </div>
        <script src="/js/script.js" ></script>    
    </body>
</html>
