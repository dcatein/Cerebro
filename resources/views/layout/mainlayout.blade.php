

<!DOCTYPE html>

<html lang="en">

   <head>

     @include('layout.partials.head')
     @section('style')
         <link href="/css/card.css" rel="stylesheet">
     @show
   </head>

   <body style="background: url(https://cdn.pixabay.com/photo/2015/02/02/11/08/office-620817_960_720.jpg)">

    @include('layout.partials.nav')

    @include('layout.partials.header')

    @yield('content')

    @include('layout.partials.footer')
    @include('layout.partials.footer-scripts')



   </body>

</html>
