<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Equipe</title>
  
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">


<!-- Styles -->
<style>
    html, body {
        background-color: #fff;
        color: #636b6f;
        font-family: 'Raleway', sans-serif;
        font-weight: 100;
        height: 100vh;
        margin: 0;
    }

    .full-height {
        height: 20vh;
    }

    .flex-center {
        align-items: center;
        display: flex;
        justify-content: center;
    }

    .position-ref {
        position: relative;
    }

    .top-right {
        position: absolute;
        right: 10px;
        top: 18px;
    }

    .content {
        text-align: center;
    }

    .title {
        font-size: 84px;
    }

    .links > a {
        color: #636b6f;
        padding: 0 25px;
        font-size: 12px;
        font-weight: 600;
        letter-spacing: .1rem;
        text-decoration: none;
        text-transform: uppercase;
    }

    .m-b-md {
        margin-bottom: 30px;
    }
</style>


    <link rel="icon" href="img/Fevicon.png" type="image/png">

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">  
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">

    <link rel="stylesheet" href="{{ asset('css/style2.css') }}">
    
  </head>
  <body>

    
    <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif
    </div>


    <!-- ================ começo banner ================= -->
    <section class="banner-area team" id="team">
      <div class="container h-100">
        <div class="banner-area__content text-center">
          <h1>Equipe de desenvolvedores</h1>
          <nav aria-label="breadcrumb" class="banner-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Equipe</li>
            </ol>
          </nav>
        </div>
      </div>
    </section>
    <!-- ================ fim banner ================= --> 


    <!-- ================ começo seção time ================= -->      
    <section class="section-padding--large bg-soapstone">
      <div class="container">
        <div class="section-intro pb-70px">
          <h4 class="section-intro__title">Nossa Equipe de desenvolvedores</h4>
        </div>

        <div class="row mb-xl-5 pb-4">
          <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
            <div class="card card-team">
              <div class="card-team__img">
                <img class="card-img rounded-0" src="{{ asset('team1.png') }}" alt="">
              </div>
              <div class="card-team__position">
                <div class="card-footer d-flex justify-content-between align-items-center">
                  <div class="card-team__bio">
                    <h4><a href="#">Euclydes Uchoas</a></h4>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
            <div class="card card-team">
              <div class="card-team__img">
                <img class="card-img rounded-0" src="{{ asset('team2.png') }}" alt="">
              </div>
              <div class="card-team__position">
                <div class="card-footer d-flex justify-content-between align-items-center">
                  <div class="card-team__bio">
                    <h4><a href="#">Donnell Douglas</a></h4>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
            <div class="card card-team">
              <div class="card-team__img">
                <img class="card-img rounded-0" src="{{ asset('team3.png') }}" alt="">
              </div>
              <div class="card-team__position">
                <div class="card-footer d-flex justify-content-between align-items-center">
                  <div class="card-team__bio">
                    <h4><a href="#">Matheus de Campos</a></h4>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> 
    <!-- ================ fim seção sobre ================= -->


    <!-- ================ começo footer ================= -->
    <footer class="footer-area section-gap">
      <div class="container">     
        <div class="footer-bottom row align-items-center text-center text-lg-left">
             
        </div>
      </div>
    </footer>
    <!-- ================ fim footer ================= -->

    <script src="vendors/jquery/jquery-3.2.1.min.js"></script>
    <script src="vendors/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="vendors/OwlCarousel/owl.carousel.min.js"></script>
    <script src="vendors/sticky/jquery.sticky.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/mail-script.js"></script>
    <script src="vendors/Magnific-Popup/jquery.magnific-popup.min.js"></script> 
    <script src="js/main.js"></script>
  </body>
</html>