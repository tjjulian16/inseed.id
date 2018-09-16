 <!DOCTYPE html>
<html lang="en">
<head>
 <link rel="icon" href="assets/image/icon/icon.png">
  <title>inseed.id - Seaweed Invest</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/styleCSS.css">
  <link rel="stylesheet" href="css/jcarousel.responsive.css">
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" >

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
  <script src="js/jcarousel.responsive.js"></script>
  <script src="js/jquery.jcarousel.min.js"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script type="text/javascript">
$(window).load(function() {
    $("#loading").fadeOut("slow");
});
</script>

<style type="text/css">
  

</style>
</head>
<body>
<div id="loading"></div>
<section id="header">
<nav class="navbar navbar-expand-lg navbar-light bg-white">
 <a href="{{URL::to('welcome')}}"><img src="assets/image/logo.png" style="  padding: 0 20px 0 20px;
    height: 75px;
    width: 250px;"></a>  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
 

  <div class="collapse navbar-collapse " id="navbarSupportedContent" >
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="{{URL::to('welcome')}}">HOME <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{URL::to('invest')}}">SEAWEED INVEST</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="{{URL::to('mart')}}">SEAWEED MART</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="{{URL::to('article')}}">SEAWEED ARTICLE</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="{{URL::to('about_us')}}">TENTANG KAMI</a>
      </li>
     <li class="nav-item">
        <a class="nav-link" href="{{URL::to('login')}}">MASUK</a>
      </li>
    </ul>
  </div>
</nav>
  </section>


 <section id="fiturKami" style="padding: 4% 0; height: 100%; ">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 text-center" id="featur">
            <h1 class="text-uppercase text-center" >
            <h2>Kisah Petani Bone memulai Budidaya Rumput Laut</h2>
            </h1>
            <hr class="my-4">
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <img class="col-lg-12 col-md-12 col-sm-12 d-block w-100" src="assets/image/petani/petani1.jpg">
        </div>
        <br>
        <div class="row">
          <p class="col-lg-12 col-md-12 col-sm-12" style="text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>

        <div class="col-lg-8 col-md-8 col-sm-8 text-center" style="margin: 0 15% 0;">
            <hr class="my-4">
            <div class="card">
              <div class="card-body row">
               <div class="col-md-3">
                 <img src="assets/image/boy.png" style="max-width: 80px; height: auto;">
               </div>
               <div class="col-md-9" style="text-align: justify;">
                   <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                   tempor incididunt ut labore et dolore magna aliqua. .</p>
                   <footer class="blockquote-footer">Julian</footer>
               </div>
              
             </div>
             
               
            </div>
          </div>
        <div class="row">
          <div class="col-lg-8 col-md-8 col-sm-8 text-center" style="margin: 0 15% 0;">
            <hr class="my-4">
            <form action="#" method="POST" id="formArtikel">
              
              <h6>Berikan Komentar anda:</h6>
              <textarea name="isiArtikel" form="formArtikel" class="form-control"></textarea>
              <br>
              
              <div class="upload-btn-wrapper">
                <button type="submit" class="btn btn-outline-primary">Simpan</button>
              </div>
              <br>
              <br>
              
            </form>
          </div>
          

        </div>
      </div>
    </section>