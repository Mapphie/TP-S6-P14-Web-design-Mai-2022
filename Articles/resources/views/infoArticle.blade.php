<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>Information Article</title>

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

    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
      <div class="container">
        <a href="index.html" class="navbar-brand">Reve<span class="text-primary">Tive.</span></a>

        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-collapse collapse" id="navbarContent">
          <ul class="navbar-nav ml-auto pt-3 pt-lg-0">
            <li class="nav-item">
              <a href="index.html" class="nav-link">Home</a>
            </li>

            <li class="nav-item active">
              <a href="blog.html" class="nav-link">Blog</a>
            </li>
            <li class="nav-item">
              <a href="contact.html" class="nav-link">Contact</a>
            </li>
          </ul>
        </div>
      </div> <!-- .container -->
    </nav> <!-- .navbar -->
  </header>

  <main>
    <div class="page-section pt-4">
      <div class="container">
        <nav aria-label="Breadcrumb">
          <ol class="breadcrumb bg-transparent mb-4">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item"><a href="blog.html">Blog</a></li>
            <li class="breadcrumb-item active" aria-current="page">How to growth your Business with scalable Employee</li>
          </ol>
        </nav>
        <div class="row">
          <div class="col-lg-8">
            <div class="blog-single-wrap">
              <div class="post-thumbnail">
                <img src="{{Storage::url($article->image)}}" alt="image" width="500px" height="500px">
              </div>
              <h1 class="post-title">{{$article->titre}}</h1>
              <div class="post-meta">
                <div class="post-author">
                  <span class="text-grey">By</span> <a href="#">Admin</a>
                </div>
                <span class="gap">|</span>
                <div class="post-date">
                  <a href="#">22 Jan, 2018</a>
                </div>
                <span class="gap">|</span>
                <div>
                  <a href="#">{{$article->categorie->nom}}</a>
                </div>
                <span class="gap">|</span>
                <div class="post-comment-count">
                  <a href="#">8 Comments</a>
                </div>
              </div>
              <div class="post-content">
                {!! html_entity_decode($article->contenu) !!}

              </div>
            </div> <!-- .blog-single-wrap -->

            <div class="comment-form-wrap pt-5">

              <div class="filterable-btn">
              <a href="{{route('home')}}">
                <button type="submit" class="btn">Retour</button>
                </a>
              </div>
            </div> <!-- .comment-form-wrap -->
          </div>


          <div class="col-lg-4">
            <div class="widget">
              <div class="widget-box">
                <h3 class="widget-title">Recherche</h3>
                <div class="divider"></div>
                <form action="#" class="search-form">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Type a keyword and hit enter">
                    <button type="submit" class="btn"><span class="icon mai-search"></span></button>
                  </div>
                </form>
              </div>
              <div class="widget-box">
                <h3 class="widget-title">Categories</h3>
                <div class="divider"></div>
                <ul class="categories">
                    @for ($i=0;$i<count($categories);$i++)
                        <li><a href="#">{{$categories[$i]->nom}} <span>12</span> </a></li>

                    @endfor

                </ul>
              </div>

              <div class="widget-box">
                <h3 class="widget-title">Recent Blog</h3>
                <div class="divider"></div>
                <div class="blog-item">
                  <div class="content">
                    <h6 class="post-title"><a href="#">Even the all-powerful Pointing has no control</a></h6>
                    <div class="meta">
                      <a href="#"><span class="mai-calendar"></span> July 12, 2018</a>
                      <a href="#"><span class="mai-person"></span> Admin</a>
                      <a href="#"><span class="mai-chatbubbles"></span> 19</a>
                    </div>
                  </div>
                </div>
                <div class="blog-item">
                  <div class="content">
                    <h6 class="post-title"><a href="#">Even the all-powerful Pointing has no control</a></h6>
                    <div class="meta">
                      <a href="#"><span class="mai-calendar"></span> July 12, 2018</a>
                      <a href="#"><span class="mai-person"></span> Admin</a>
                      <a href="#"><span class="mai-chatbubbles"></span> 19</a>
                    </div>
                  </div>
                </div>
                <div class="blog-item">
                  <div class="content">
                    <h6 class="post-title"><a href="#">Even the all-powerful Pointing has no control</a></h6>
                    <div class="meta">
                      <a href="#"><span class="mai-calendar"></span> July 12, 2018</a>
                      <a href="#"><span class="mai-person"></span> Admin</a>
                      <a href="#"><span class="mai-chatbubbles"></span> 19</a>
                    </div>
                  </div>
                </div>
              </div>


              <div class="widget-box">
                <h3 class="widget-title">Résumé</h3>
                <div class="divider"></div>
                <p>{{ $article->resume }}</p>
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
