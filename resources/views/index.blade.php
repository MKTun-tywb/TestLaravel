<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <link rel="stylesheet" href="{{asset('/css/bootstrap.min.css')}}" />
  <link rel="stylesheet" href="{{asset('/css/main.css')}}" />
  <link href="https://fonts.googleapis.com/css?family=Courgette" rel="stylesheet" />
  <link rel="stylesheet" href="{{asset('/css/main.css')}}">
  <link rel="stylesheet" href="{{asset('../css/datatables.min.css')}}" />
  <script src="{{asset('../js/datatables.min.js')}}" type="text/javascript"></script>



  @yield('title')
</head>

<body>

  <header>
    <nav class="navbar navbar-expand-lg navbar-light">
      <p class="navbar-brand d-flex">
        <img src="{{asset('/Fish_Image/logo crop.jpg')}}" alt="Aqua Oranamental" width="100px" height="50px" />
        Aqua Ornamental
      </p>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navBar">
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navBar">
        <ul class="navbar-nav mx-auto">
          @yield('nav')
        </ul>
      </div>
      <div class="navbar-icons d-none d-lg-flex">
        <div class="navbar-icon mx-2">
          <i class="fas fa-search"></i>
        </div>
      </div>
    </nav>
  </header>
  <br><br>
@yield('content')
<br><br>
  <footer id = "contact">
    <div class="row">
      <div class=" footer-css col-lg-4 col-sm-5 col-md-5 column1">
        <h5 class="text-center" style="text-decoration:  underline wavy;">Contact Us</h5>
        Founder: Example <br>
        Phone Number: 09-xxxxxxx <br />
        Email: someemail@example.com
      </div>
      <div class=" footer-css col-lg-4 col-sm-3  col-md-3 text-center column2">

        <h4 style="text-decoration:  underline wavy;">Follow Us</h4>
        <i class="fab fa-facebook m-2"></i>
        <i class="fab fa-twitter m-2"></i>
      </div>
      <div class="footer-css  col-lg-4 col-sm-4 col-md-4 text-center column3">
        <h4 style="text-decoration:  underline wavy;">Aqua Ornamental</h4>
        <ul class="footer-ul">
          <li><a href="index.html">Home</a></li>
          @if(session('code') == 'admin123')
          <li><a href="add">Add Fish</a></li>
          @endif
          <li><a href="contact.html">Contact</a></li>
          <li><a href="">About</a></li>
        </ul>
      </div>
    </div>
    <br>
    <h6 class="text-center">Copyright Reserved @ 2019 Aqua Ornamental Fish Farm Co.,Ltd;</h6>
  </footer>
  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/app.js"></script>
	<script src="js/datatables.min.js" type="text/javascript"></script>

</body>

</html>
