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
<link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}" >


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
              <a href="index.html" class="nav-link">Home</a>
            </li>
            <li class="nav-item">
              <a href="Intelligence-artificielle-article-new" class="nav-link">Nouvelle Article</a>
            </li>

            <li class="nav-item active">
              <a href="Intelligence-artificielle-deconnexion" class="nav-link">Déconnexion</a>
            </li>
          </ul>
        </div>
      </div> <!-- .container -->
    </nav> <!-- .navbar -->

    <div class="page-banner bg-img bg-img-parallax overlay-dark" style="background-image: url(../assets/img/bg_image_3.jpg);">
      <div class="container h-100">
        <div class="row justify-content-center align-items-center h-100">
          <div class="col-lg-8">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Nouvelle Article</li>
              </ol>
            </nav>
            <h1 class="fg-white text-center">Nouvelle Article</h1>
          </div>
        </div>
      </div>
    </div> <!-- .page-banner -->
  </header>

  <main>
    <div class="page-section">
      <div class="container">
        <div class="text-center">
          <h2 class="title-section mb-3">Stay in touch</h2>
          </div>
        <div class="row justify-content-center mt-5">
          <div class="col-lg-8">
            <form action="Intelligence-artificielle-article-create" method="post" enctype="multipart/form-data" class="form-contact">
                @csrf
              <div class="row">
                <div class="col-sm-6 py-2">
                  <label for="titre" class="fg-grey">Titre</label>
                  <input type="text" class="form-control" name="titre" id="titre" placeholder="Enter name..">
                </div>
                <div class="col-sm-6 py-2">
                  <label for="image" class="fg-grey">Image</label>
                  <input class="form-control" type="file" accept="image/*"  name="image" id="image">
                </div>
                <div class="col-12 py-2">
                  <label for="categorie" class="fg-grey">Catégorie </label>
                  <select name="categorie" class="form-control">
                        @for ($i=0;$i<count($categories);$i++)
                            <option value='{{ $categories[$i]->id }}'>{{ $categories[$i]->nom }}</option>
                        @endfor
                    </select>
                </div>
                <div class="col-12 py-2">
                  <label for="resume" class="fg-grey">Résumé</label>
                  <textarea id="message" rows="8" name="resume" class="form-control" placeholder="Enter message.."></textarea>
                </div>
                <div class="col-12 py-2">
                    <label for="Contenu" class="fg-grey">Contenu</label>
                    <textarea class="form-control" name="contenu" id="editor"></textarea>
                </div>
                <div class="col-12 mt-3">
                  <button type="submit" class="btn btn-primary px-5">Submit</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div> <!-- .container -->
    </div> <!-- .page-section -->

  </main>



  <script src="{{ asset('ckeditor5/ckeditor.js') }}"></script>
  <script>
      ClassicEditor
              .create( document.querySelector( '#editor' ),{
                  ckfinder:{
                      uploadUrl: '{{ route('ckeditor.upload').'?_token='.csrf_token() }}'
                  }
              })
              .then (editor => {
                  console.log( editor );
              } )
              .catch( error => {
                  console.error( error );
              });
  </script>

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
