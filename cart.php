 <!DOCTYPE html>
<html>
<head>
   <link rel="icon" href="assets/image/icon/icon.png">
  <title>inseed.id - Keranjang</title>
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
 <a href="{{URL::to('welcome')}}"><img src="assets/image/logo.png" style=" padding: 0 20px 0 20px;
    height: 75px;
    width: 250px;"></a> 
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
 

  <div class="collapse navbar-collapse " id="navbarSupportedContent">
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

<section id="Keranjang">
   
 <div class="container-fluid">
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="table-responsive" style="margin-top: 2%;">
                <table class="table table-striped">
                    <thead>
                        <tr class="headerKeranjang">
                            <th scope="col"> Foto Produk</th>
                            <th scope="col" style="width: 25%;">Nama Produk</th>
                            
                            <th scope="col" class="text-center">Jumlah</th>
                            <th scope="col" class="text-right">Harga</th>
                            <th scope="col" class="text-right">Hapus</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="produkKeranjang">
                            <td><img src="assets/image/petani/petani1.jpg"/> </td>
                            <td>Rumput laut X</td>
                           
                            <td><input class="form-control" type="text" value="1" /></td>
                            <td class="text-right">Rp 40.000</td>
                            <td class="text-right"><a href="#" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> </a> </td>
                        </tr>
                        <tr class="produkKeranjang">
                            <td><img src="assets/image/petani/petani2.jpg" /> </td>
                            <td>Rumput laut Y</td>
                           
                            <td><input class="form-control" type="text" value="1" /></td>
                            <td class="text-right">Rp 25.000</td>
                            <td class="text-right"><a href="#" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> </a> </td>
                        </tr>
                        <tr class="produkKeranjang">
                            <td><img src="assets/image/petani/petani3.jpg" /> </td>
                            <td>Rumput laut Z</td>
                           
                            <td><input class="form-control" type="text" value="1" /></td>
                            <td class="text-right">Rp 35.000</td>
                           <td class="text-right"><a href="#" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> </a> </td>
                        </tr>
                      
                    </tbody>
                </table>
            </div>
        </div>
      </div>
    <div class="row keranjangBawah">
    <div class="col-xl-6 col-md-6 col-sm-6 col-xs-6 pengirimanProdukKeranjang">
        <h4>Pengiriman Produk</h4>
        <h6 style="color: grey;">Pengiriman ke</h6>
        <h6>Timothy Julian</h6>
        <h6>Danau Bogor Raya Blok I-5 No.9, Bogor, Jawa Barat 16155</h6>
        <h6>+6287778174700</h6>
      </div>
      <div class="col-xl-5 col-md-5 col-sm-5 col-xs-5 ringkasanPesananKeranjang" >
        <h4>Ringkasan Pesanan</h4>
        <h6>Subtotal (3 item): <span class="subtotalKeranjang">Rp 100.000</span></h6>
        <h6 class="biayaPengirimanKeranjang">Biaya Pengiriman: <span>Rp 5.000</span></h6>
        <h4>Total: <span class="totalHargaKeranjang">Rp 105.000</span></h6>
          <br>
        <a href="#" class="buttonBuatPesananKeranjang">Lanjut Ke Pembayaran</a>
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
