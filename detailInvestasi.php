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

<section id="detailProduk">
  
  <div class="container-fluid" style="margin:3% 0">
    <div class="row" >
      <div class="col-lg-4 col-md-5 col-sm-11" style=" margin: 2%; ">
   <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner slideshowProduk">
    <div class="carousel-item active tab-pane" id="pic-1">
      <img class="d-block w-100" src="assets/image/produk/produk1.jpg" alt="First slide" id="pic-1">
    </div>
    <div class="carousel-item tab-pane" id="pic-2">
      <img class="d-block w-100" src="assets/image/produk/produk2.jpg" alt="Second slide" id="pic-2">
    </div>
    <div class="carousel-item tab-pane" id="pic-3">
      <img class="d-block w-100" src="assets/image/produk/produk3.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
  <ul class="preview-thumbnail nav nav-tabs">
              <li class="active"><a data-target="#pic-1" data-toggle="tab"><img src="assets/image/produk/produk1.jpg" /></a></li>
              <li><a data-target="#pic-2" data-toggle="tab"><img src="assets/image/produk/produk2.jpg" /></a></li>
              <li><a data-target="#pic-3" data-toggle="tab"><img src="assets/image/produk/produk3.jpg" /></a></li>
            </ul>
        </div>
        <div class=" col-lg-3 col-md-5 col-sm-10 descProdukDetail">
          <h2>Proyek Rumput Laut Sidoarjo</h2>
            <h5>Mulai dari:<span > Rp 15.000</span></h5>
            <h5>Lokasi Proyek: <span > Kabupaten Sidoarjo,Jawa Timur</span></h5>
              <h5>Ekspektasi Profit: <span > 5%</span></h5>
               <h5>Waktu pengerjaan proyek: <br> <span> 1 Oktober 2018 - 1 November 2018</span></h5>
                <h6>Deskripsi:</h6>
                  <p>Proyek ini merupakan proyek pengadaan rumput laut dari para petani rumput laut yang ada di sidoarjo
         </p>
            
            <div class="progress" style="margin-bottom: 8%;">
              <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%;">75%</div>

            </div>
            <p class="card-text ">Dana Terkumpul :<span >Rp 25.932.150</span></p>
                <p class="card-text ">Target Dana:<span >Rp 30.000.000</span></p>
                    <p class="card-text ">Sisa Waktu :<span >10 Hari</span></p>
                    <div class="text-center">
                      <a href="#" class="btn btn-success buttonProdukInvest">Danai Proyek</a>
                    </div>
                    
          
     </div>
         <div class="col-lg-3 col-md-8 col-sm-10 descSeller" >
        <h2 style="color: green;">Proyek Oleh:</h2><br>
        <img src="assets/image/user.png"><br><br>
        <h4>Koperasi Sidoarjo</h4>
        <span class="fas fa-star"><span class="fas fa-star" ><span class="fas fa-star"><span class="fas fa-star"></span></span></span></span>
        <p style="margin-top: 2%;">Tahun Bergabung: 2018</p>
        <p>Lokasi Koperasi: Sidoarjo, Jawa Timur</p>
      </div>
      </div>
    
    </div>
  </div>
</section>


      <section id="contact-us">
        <div class="container">
          <div class="row">
           <div class="col-xl-4 col-md-12 col-sm-12 col-xs-12 logo_footer">
               <a href="{{URL::to('welcome')}}"><img src="assets/image/logo.png" style="width: 280px; height: auto;"></a>
               <h6 >Invest Seaweed in Indonesia</h6>
           </div>
        <div class="col-xl-4 col-md-12 col-sm-12 col-xs-12 contact" style="text-align: center; ">
               <h4>CONTACT US</h4>
               <div class="row">
               <div class="col-xl-4 col-md-4 col-sm-6 col-xs-6">
                 <h6><b>Address: </b></h6>
               </div>
               <div class="col-xl-8 col-md-8 col-sm-6 col-xs-6">
                  <h6> Universitas Brawijaya, Kota Malang, Jawa Timur 61553</h6>
               </div>
            </div>
              <div class="row">
               <div class="col-xl-4 col-md-4 col-sm-6 col-xs-6">
                 <h6><b>Phone: </b></h6>
               </div>
               <div class="col-xl-8 col-md-8 col-sm-6 col-xs-6">
                  <h6>08561729xx (Apri)</h6>
               </div>
            </div>
           <div class="row">
               <div class="col-xl-4 col-md-4 col-sm-6 col-xs-6">
                 <h6><b>Email: </b></h6>
               </div>
               <div class="col-xl-8 col-md-8 col-sm-6 col-xs-6">
                  <h6>inseed@ub.ac.id</h6>
               </div>
            </div>
             
           </div>
              <div class="col-xl-4 col-md-12 col-sm-12 col-xs-12 socialmedia" style="text-align: center;">
                <h4>OUR SOCIAL MEDIA</h4>
              <span class="fab fa-facebook-square fa-3x socmed-icon"></span><span class="fab fa-twitter-square fa-3x socmed-icon"></span><span class="fab fa-instagram fa-3x socmed-icon"></span>
           </div>
          </div> 
      </div>
      </section>

      <script>
            $(document).ready(function(){
        var quantity = 1;

        $('.quantity-right-plus').click(function(e){
            e.preventDefault();
            var quantity = parseInt($('#quantity').val());
            $('#quantity').val(quantity + 1);
        });

        $('.quantity-left-minus').click(function(e){
            e.preventDefault();
            var quantity = parseInt($('#quantity').val());
            if(quantity > 1){
                $('#quantity').val(quantity - 1);
            }
        });

    });
      </script>
  </body>
</html>
