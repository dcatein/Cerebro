<!DOCTYPE html>
<html lang="en">

   <head>
     <link href="/css/app.css" rel="stylesheet">
     @include('layout.partials.head')
     @section('style')
         <link href="/css/card.css" rel="stylesheet">
     @show
   </head>

   <body>
      @include('layout.partials.nav')

      @yield('content')

    <script src="/js/script.js" ></script>

   </body>

</html>
