<!DOCTYPE html>
<html lang="ar" dir="rtl" >

 <head>
    @include('layout.partials.head')
 </head>

 <body class="text-right d-flex flex-column min-vh-100" style="background-color: rgb(232, 236, 239)">
@include('layout.partials.nav')

@yield('content')

@include('layout.partials.footer')

@include('layout.partials.footer-scripts')
 </body>

</html>
