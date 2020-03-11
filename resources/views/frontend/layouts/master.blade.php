<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>LeoNepal</title>
<!-- Fav Icon -->
<link rel="shortcut icon" href="favicon.ico">

<!-- Owl carousel -->
<link href="{{asset('public/css/frontend/owl.carousel.css')}}" rel="stylesheet">

<!-- Bootstrap -->
<link href="{{asset('public/css/frontend/bootstrap.min.css')}}" rel="stylesheet">

<!-- Font Awesome -->
<link href="{{asset('public/css/frontend/font-awesome.css')}}" rel="stylesheet">

<!-- Custom Style -->
<link href="{{asset('public/css/frontend/main.css')}}" rel="stylesheet">


<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
  <script src="js/html5shiv.min.js"></script>
  <script src="js/respond.min.js"></script>
<![endif]-->

</head>
<body>
<!-- Header start -->
<div class="header">
  <div class="container">
    <div class="row">
      <div class="col-md-2 col-sm-3 col-xs-12"> <a href="index.html" class="logo"><img src="images/logo.png" alt="" /></a>
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        </div>
        <div class="clearfix"></div>
      </div>
      <div class="col-md-10 col-sm-12 col-xs-12">
        <div class="navbar navbar-default" role="navigation">
         

          <div class="clearfix"></div>
        </div>
      </div>
    </div>
  </div>
</div>


@yield('section')




<!--Footer-->

<!--Footer end-->

<!--Copyright-->


<!-- Bootstrap's JavaScript -->
<script src="{{asset('public/js/frontend/jquery-2.1.4.min.js')}}"></script>
<script src="{{asset('public/js/frontend/bootstrap.min.js')}}"></script>

<!-- Owl carousel -->
<script src="{{asset('public/js/frontend/owl.carousel.js')}}"></script>

<!-- Custom js -->
<script src="{{asset('public/js/frontend/script.js')}}"></script>





@yield('addonjs')
</body>
</html>