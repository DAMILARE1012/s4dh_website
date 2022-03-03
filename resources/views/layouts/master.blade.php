<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

     <title>Satellite for Digital Health </title>

     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="ITU's connect2recover Research Grant: Lasisi Salami Lawal">
     <meta name="keywords" content="ITU's connect2recover Research Grant, Lasisi Salami Lawal, Musa Aibinu">
     <meta name="author" content="Lasisi Salami Lawal (C.Eng)">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     @include('roots._css')

</head>
<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

     <!-- PRE LOADER -->
     <section class="preloader">
          <div class="spinner">

               <span class="spinner-rotate"></span>
               
          </div>
     </section>


     @include('partials.header')
     

     @yield('content')
       

     @include('partials.footer')
     
</body>
</html>