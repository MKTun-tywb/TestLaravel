<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="{{asset('/css/bootstrap.min.css')}}" />
  <link rel="stylesheet" href="{{asset('/css/main.css')}}" />
  <link href="https://fonts.googleapis.com/css?family=Courgette" rel="stylesheet" />
  <link rel="stylesheet" href="{{asset('/css/main.css')}}">
  <link rel="stylesheet" href="{{asset('/css/all.css')}}">
  <link rel="stylesheet" href="{{asset('../css/datatables.min.css')}}" />
  <script src="{{asset('../js/datatables.min.js')}}" type="text/javascript"></script>
  <link rel="shortcut icon" type = "image/png" href="{{asset('/Fish_Image/logo crop.jpg')}}">
<script src="https://kit.fontawesome.com/1798a401ee.js" crossorigin="anonymous"></script>

  <title>Aqua Oranamental</title>
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
        Founder: U Soe Nyunt Tun <br>
        Phone Number 1: 09-5115819 <br />
        Phone Number 2: 09-975555733 <br />
        Email: aquaticornamental@gmail.com
      </div>
      <div class=" footer-css col-lg-4 col-sm-3  col-md-3 text-center column2">

        <h4 style="text-decoration:  underline wavy;">Follow Us</h4>
        <i class="fab fa-facebook m-2" style = 'color:blue;'></i>
        <i class="fab fa-twitter m-2" style = 'color:#1DA1F2;'></i>
      </div>
      <div class="footer-css  col-lg-4 col-sm-4 col-md-4 text-center column3">
        <h4 style="text-decoration:  underline wavy;">Aqua Ornamental</h4>
        <ul class="footer-ul">
          <li><a href="homes">Home</a></li>
          @if(session('code') == 'admin123')
          <li><a href="add">Add Fish</a></li>
          @endif
          <li><a href="contact">Contact</a></li>
          <li><a href="about">About</a></li>
        </ul>
      </div>
    </div>
    <br>
    <h6 class="text-center">Copyright Reserved @ 2019 Aqua Ornamental Fish Farm Co.,Ltd;</h6>
  </footer>
  <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <script src="js/app.js"></script>
	<script src="js/datatables.min.js" type="text/javascript"></script>

</body>

</html>
