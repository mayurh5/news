<!doctype html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.87.0">
    <title>News</title>

    <!-- Bootstrap core CSS -->
  

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }
      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
      .card .card-title {
        font-weight: 400 !important;
        letter-spacing: .05rem !important;
        font-size: 1.2rem !important;
        margin-bottom: 1.2rem !important;
        text-transform: capitalize !important;
    }
    </style>
<link rel="stylesheet" href="https://www.pixinvent.com/demo/frest-clean-bootstrap-admin-dashboard-template/app-assets/css/bootstrap.min.css">
<link rel="stylesheet" href="https://www.pixinvent.com/demo/frest-clean-bootstrap-admin-dashboard-template/app-assets/css/bootstrap-extended.min.css">
<link rel="stylesheet" href="https://www.pixinvent.com/demo/frest-clean-bootstrap-admin-dashboard-template/app-assets/css/colors.min.css">
    
    <!-- Custom styles for this template -->
     <link href="{!! url('assets/css/app.css') !!}" rel="stylesheet">
     {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">   --}}
     {{-- <link href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css' rel='stylesheet' type='text/css'> --}}

     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     <!-- <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script> -->
  


</head>
<body>
    <main class="container">
        @yield('content')
    </main>

    <script src="{!! url('assets/bootstrap/js/bootstrap.bundle.min.js') !!}"></script>
@yield('script')

  </body>
</html>