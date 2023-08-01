<!DOCTYPE html>
<html lang="en">
   <head>
        @include('partials.head')
   </head>
   <body>
      <!-- header section start -->
            @include('partials.nav-bar')
      <!-- header section end -->

      <!-- content section start -->
            @yield('content')
      <!-- content section end -->

      <!-- footer section start -->
            @include('partials.footer')
      <!-- footer section end -->

      <!-- copyright section start -->
            @include('partials.copyright')
      <!-- copyright section end -->

      <!-- Javascript files-->
            @include('partials.js-files')
   </body>
</html>
