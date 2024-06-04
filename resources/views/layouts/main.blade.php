<!DOCTYPE html>
<html lang="en">
<head>
      @include('components.head')
</head>
<body>
    <div class="container-xxl bg-white p-0">
   
        <!-- Spinner Start -->
        @include('components.spinner')
        <!-- Spinner End -->


        <!-- Navbar Start -->
        @include('components.navBar')
        <!-- Navbar End -->
     
       

        @yield('content')


        <!-- Footer Start -->
        @include('components.footer')
        <!-- Footer End -->


        <!-- Back to Top -->
        @include('components.back-to-top')
    </div>
      
    <!-- JavaScript Libraries -->
    @include('components.JS-libraries')

</body>

</html>