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


<section id="formJual">
	
<div class="container">
	<div class="col-md-12">
  <h2>Informasi produk</h2>
  <br>
  <form class="form-horizontal" action="xxxx">
    <div class="form-group">
      <label class="control-label col-md-4" for="produk">Nama Produk</label>
      <div class="col-md-12">
        <input type="text" class="form-control" id="produk" placeholder="Masukkan Nama Produk" name="produk">
      </div>
    </div>

     <div class="form-group">
  		<label class="control-label col-md-4" for="deskripsi">Deskripsi Produk</label>
      	<div class="col-md-12">
  			<textarea class="form-control" rows="5" id="deskripsi" placeholder="masukkan keterangan produkmu"></textarea>
  		</div>
	</div>


    <div class="form-group">
      <label class="control-label col-md-4" for="sell">Kategori</label>
      <div class="col-md-12">          
        <select class="form-control" id="sel1" placeholder="Kategori">
        <option>Makanan & Minuman</option>
        <option>Kecantikan</option>
        <option>Lainnya</option>
      </select>
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-md-4" for="produk">Lokasi produk</label>
      <div class="col-md-12">
        <select class="form-control" id="sel1" placeholder="Lokasi">
        <option value="Banten">Banten</option>	
       <option value="Jakarta">Jakarta</option> 	
       <option value="Jawa Barat">Jawa Barat</option>
       <option value="Jawa Tengah">Jawa Tengah</option>
       <option value="Jawa Timur">Jawa Timur</option>
       <option value="Yogyakarta">Yogyakarta</option>

      </select>
      </div>
    </div>

    <div class="form-group">
		<label class="control-label col-md-4" for="foto">Upload Foto Barang</label>
      	 <div class="upload-btn-wrapper col-md-12">
               <button class="btn">Pilih gambar</button>
                 <input type="file" name="profilePicture" accept=".jpg, .jpeg, .png" multiple>
              </div>
    </div>


  <br>
    <h2>Harga & Stok</h2>
   <br>
   <div class="form-group">
      <label class="control-label col-md-4" for="produk">Harga (Rp)</label>
      <div class="col-md-12">
        <input type="text" class="form-control" id="produk" placeholder="Masukkan Harga" name="harga">
      </div>
    </div>

     <div class="form-group">
      <label class="control-label col-md-4" for="produk">Variasi</label>
      <div class="col-md-12">
        <input type="text" class="form-control" id="produk" placeholder="Masukkan jenis variasi produk" name="harga">
      </div>
    </div>
	
   
    
    <div class="form-group">        
      <div class="col-sm-offset-2 col-md-12">
        <button type="button" class="btn btn-primary">
  			Simpan
		</button>

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
  </body>
</html>