

<!DOCTYPE html>

<html lang="en">

   <head>
     @include('layout.partials.head')
     @section('style')
         <link href="/css/card.css" rel="stylesheet">
     @show
   </head>

   <body >

    <div class='container'>
      
      @include('layout.partials.nav')

     @yield('content')

   
    </div>


   </body>

</html>
