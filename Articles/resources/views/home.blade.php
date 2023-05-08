<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>Information Intelligence Artificielle</title>

  <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">

  <link rel="stylesheet" href="{{ asset('assets/css/maicons.css') }}">

  <link rel="stylesheet" href="{{ asset('assets/vendor/animate/animate.css') }}">

  <link rel="stylesheet" href="{{ asset('assets/vendor/owl-carousel/css/owl.carousel.css') }}">

  <link rel="stylesheet" href="{{ asset('assets/vendor/fancybox/css/jquery.fancybox.css') }}">

  <link rel="stylesheet" href="{{ asset('assets/css/theme.css') }}">


</head>
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <header>
    <div class="top-bar">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-8">
            <div class="d-inline-block">
              <span class="mai-mail fg-primary"></span> <a href="mailto:contact@mail.com">contact@mail.com</a>
            </div>
            <div class="d-inline-block ml-2">
              <span class="mai-call fg-primary"></span> <a href="tel:+0011223495">+0011223495</a>
            </div>
          </div>
          <div class="col-md-4 text-right d-none d-md-block">
            <div class="social-mini-button">
              <a href="#"><span class="mai-logo-facebook-f"></span></a>
              <a href="#"><span class="mai-logo-twitter"></span></a>
              <a href="#"><span class="mai-logo-youtube"></span></a>
              <a href="#"><span class="mai-logo-linkedin"></span></a>
            </div>
          </div>
        </div>
      </div> <!-- .container -->
    </div> <!-- .top-bar -->

    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container">
        <a href="index.html" class="navbar-brand">I<span class="text-primary">A</span></a>

        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-collapse collapse" id="navbarContent">
          <ul class="navbar-nav ml-auto pt-3 pt-lg-0">
            <li class="nav-item">
              <a href="{{route('home')}}" class="nav-link">Home</a>
            </li>


            <li class="nav-item active">
              <a href="blog.html" class="nav-link">Blog</a>
            </li>
            <li class="nav-item">
              <a href="Intelligence-artificielle-log" class="nav-link">Admin</a>
            </li>
          </ul>
        </div>
      </div> <!-- .container -->
    </nav> <!-- .navbar -->

    <div class="page-banner bg-img bg-img-parallax overlay-dark" style="background-image: url({{ asset('assets/img/bg_image_3.jpg')}}">
      <div class="container h-100">
        <div class="row justify-content-center align-items-center h-100">
          <div class="col-lg-8">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0">
                <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Blog</li>
              </ol>
            </nav>
            <h1 class="fg-white text-center">News</h1>
          </div>
        </div>
      </div>
    </div> <!-- .page-banner -->
  </header>

  <main>
    <div class="page-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-10">
            <div class="row">
                @for ($i=0;$i<count($articles);$i++)
              <div class="col-md-6 col-lg-4 py-3">
                <div class="card-blog">
                  <div class="header">

                      <img src="{{Storage::url($articles[$i]->image)}}" width="200px" height="100px" alt="img" >

                    <div class="entry-footer">

                      <a href="#" class="post-date">{{ $articles[$i]->date }}</a>
                    </div>
                  </div>
                  <div class="body">
                    <div class="post-title"><a href="blog-single.html">{{$articles[$i]->titre}}</a></div>
                    <div class="post-excerpt">{{ $articles[$i]->resume }}</div>
                  </div>
                  <div class="footer">
                    <a href="Intelligence-artificielle-article-get-{{$articles[$i]->id}}">Read More <span class="mai-chevron-forward text-sm"></span></a>
                  </div>
                </div>
              </div>
              @endfor


              <div class="col-12 my-5">
                <nav aria-label="Page Navigation">
                  <ul class="pagination justify-content-center">
                    <li class="page-item disabled">
                      <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                    </li>
                    <li class="page-item active" aria-current="page">
                      <a class="page-link" href="#">1 <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="#">2</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                      <a class="page-link" href="#">Next</a>
                    </li>
                  </ul>
                </nav>
              </div>

            </div>
          </div>

        </div>
      </div> <!-- .container -->
    </div> <!-- .page-section -->
  </main>

  <script src="{{ asset('assets/js/jquery-3.5.1.min.js') }}"></script>

  <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>

  <script src="{{ asset('assets/vendor/owl-carousel/js/owl.carousel.min.js') }}"></script>

  <script src="{{ asset('assets/vendor/wow/wow.min.js') }}"></script>

  <script src="{{ asset('assets/vendor/fancybox/js/jquery.fancybox.min.js') }}"></script>

  <script src="{{ asset('assets/vendor/isotope/isotope.pkgd.min.js') }}"></script>

  <script src="{{ asset('assets/js/google-maps.js') }}"></script>

  <script src="{{ asset('assets/js/theme.js') }}"></script>

</body>
</html>
