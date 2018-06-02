<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">


    <title>Bare - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <!-- Custom styles for this template -->
   @yield('style')
    <style>
      body {
        padding-top: 54px;
      }
      @media (min-width: 992px) {
        body {
          padding-top: 56px;
        }
      }

    </style>
     
      @include('templates.header')
  </head>

  <body>

    @include('templates.menu')
    <!-- Navigation -->

    @yield('content')

    <!-- Page Content -->

    <!-- Bootstrap core JavaScript -->
    @include('templates.footer')
    @yield('script')
  </body>

</html>
