<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>@yield('title')</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      @include('blog.includes.style')
      </head>
   <body>
      <!-- header section start -->
      <div class="header_section">
         <div class="container-fluid header_main">
            @include('blog.includes.navbar')
         </div>
         <!-- banner section start --> 
         @yield('content')
      <!-- contact section end -->
      <!-- footer section start -->
       @include('blog.includes.footer')
      <!-- footer section end -->
      <!-- copyright section start -->
     
      <!-- copyright section end -->
      <!-- Javascript files-->
      @include('blog.includes.script')
   </body>
</html>