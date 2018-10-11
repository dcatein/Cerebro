<!DOCTYPE html>
<html lang="en">

   <head>
     <link href="/css/app.css" rel="stylesheet">
     @include('layout.partials.head')
     @section('style')
         <link href="/css/card.css" rel="stylesheet">
     @show
   </head>

   <!-- <body style="background: url(https://cdn.pixabay.com/photo/2015/02/02/11/08/office-620817_960_720.jpg)"> -->
   <body>
    <div class='container'>
      @include('layout.partials.nav')

      @include('layout.partials.header')


    @include('layout.partials.footer')
    @include('layout.partials.footer-scripts')

      @yield('content')

      @include('layout.partials.footer')

    </div>

   </body>

</html>
