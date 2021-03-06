<!DOCTYPE html>
<html lang="en">
<head>
 <link rel="icon" href="<?php echo base_url('asset/assets/image/icon/icon.png');?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url('asset/css/jcarousel.responsive.js');?>"></script>

    <title>inseed.id - Tentang Kami</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url('asset/css/styleCSS.css');?>" rel="stylesheet">

  </head>
<body>
<section id="header">
<nav class="navbar navbar-expand-lg navbar-light bg-white">
 <a href="<?php echo base_url(); ?>"><img src="<?php echo base_url('asset/assets/image/logo.png');?>" style="  padding: 0 20px 0 20px;
    height: 75px;
    width: 250px;"></a>  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

<div class="collapse navbar-collapse " id="navbarSupportedContent" >
    <ul class="text-uppercase navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url(); ?>">HOME <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?=base_url()?>index.php/invest">SEAWEED INVEST</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="<?=base_url()?>index.php/mart">SEAWEED MART</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="<?=base_url()?>index.php/article">SEAWEED ARTICLE</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="<?=base_url()?>index.php/welcome/about_us">TENTANG KAMI</a>
      </li>
     <li class="nav-item">
	 <?php 
		if ($this->session->userdata('$level') === 0) {
			echo '<a class="nav-link" href="login">';
			echo 'MASUK';
			echo '</a>';
		}
		else {
			echo '<a class="nav-link" href="login">';
			echo $this->session->userdata('username');}
		echo '</a>';?>
		</a>
      </li>
    </ul>
  </div>
</nav>
  </section>
  <section id="pendahuluan">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12 col-xs-12" >
          <img src="<?php echo base_url('asset/assets/image/logo.png');?>">
          <h2>Invest Seaweed in Indonesia</h2>
          <p>inseed.id merupakan website yang mewadahi masyarakat untuk ikut berkontribusi pada budidaya rumput laut di Indonesia melalui cara investasi. Dengan ini, masyarakat secara tidak langsung ikut meningkatkan kesejahteraan para petani rumput laut dengan memberikan bantuan berupa modal sehingga petani dapat memiliki kekuatan tawar menawar yang tinggi di pasar.  </p>
          <p>inseed.id juga membantu membuka potensi produk rumput laut dari bahan mentah menjadi hasil olahan yang bervariatif dengan cara memasarkan hasil produksi para UMKM kepada masyarakat umum untuk bisa melihat dan membelinya. Dengan demikian, inseed.id diharapkan dapat membawa inovasi teknologi yang positif bagi para petani maupun masyarakat.</p>
        </div>
      </div>
    </div>
    </section>
    <section id="fitur">
    <div class="container-fluid">
      <div class="row cyan-background">
        <div class="col-lg-12 col-xs-12">
          <div class="col-lg-4 col-sm-12 fitur-right-side">
            <img src="<?php echo base_url('asset/assets/image/invest.png');?>" class="fitur-img">
          </div>
          <div class="col-lg-8 col-sm-12 fitur-left-side text-fitur-white">
            <h2 class="text-fitur-title">Seaweed Invest</h2>
            <p class="text-fitur-content">fitur utama kami adalah menyediakan tempat bagi masyarakat untuk membantu para petani rumput laut di Indonesia dengan cara menginvestasikan sejumlah uangnya agar dikelola oleh para petani serta menjadi tempat masyarakat belajar berinvestasi sejak dini. Dalam berinvestasi, kami menggunakan sistem bagi hasil, dimana para investor dan petani rumput laut akan mendapat hasil keuntungan maupun kerugian yang akan ditanggung bersama di akhir proyek sesuai dengan kesepakatan. </p>
          </div>
        </div>
      </div>
      <div class="row white-background">
        <div class="col-lg-12 col-xs-12">
          <div class="col-lg-4 col-sm-12 fitur-left-side">
            <img src="<?php echo base_url('asset/assets/image/mart.png');?>" class="fitur-img">
          </div>
          <div class="col-lg-8 col-sm-12 fitur-right-side text-fitur-cyan">
            <h2 class="text-fitur-title">Seaweed Mart</h2>
            <p class="text-fitur-content">Pada website inseed.id, kami menyediakan tempat untuk para UMKM yang mengelola dan menjual produk-produk hasil olahan rumput laut untuk memasarkan produk nya di website kami sehingga dapat menjangkau pasar yang lebih luas lagi. Untuk keamanan transaksi juga dapat dijamin dengan adanya sistem pembayaran menggunakan rekening bersama, dimana dana yang dibayarkan oleh pembeli akan diterima terlebih dahulu oleh pihak inseed.id dan setelah itu diteruskan ke penjual setelah pembeli menerima produknya dengan baik..</p>
          </div>
        </div>
      </div>
      <div class="row cyan-background">
          <div class="col-lg-12 col-xs-12">
            <div class="col-lg-4 col-sm-12 fitur-right-side">
              <img src="<?php echo base_url('asset/assets/image/icon/article.png');?>" class="fitur-img">
            </div>
            <div class="col-lg-8 col-sm-12 fitur-left-side text-fitur-white">
              <h2 class="text-fitur-title">Seaweed Article</h2>
              <p class="text-fitur-content">Kami juga menyediakan halaman khusus yang memuat artikel - artikel mengenai rumput laut agar menambah wawasan para pengunjung terhadap manfaat dan potensi rumput laut di Indonesia, keanekaragaman rumput laut Indonesia, dan informasi menarik lainnya.</p>
            </div>
          </div>
      </div>
      <div class="row white-background">
          <div class="col-lg-12 col-xs-12">
            <div class="col-lg-4 col-sm-12 fitur-left-side">
              <img src="<?php echo base_url('asset/assets/image/user.png');?>" class="fitur-img">
            </div>
            <div class="col-lg-8 col-sm-12 fitur-right-side text-fitur-cyan">
              <h2 class="text-fitur-title">Dashboard User</h2>
              <p class="text-fitur-content">Setiap pengguna yang telah terdaftar pada website inseed.id akan memiliki halaman dashboard yang di dalamnya terdapat pusat pengelolaan produk yang ingin dijual, status pesanan dan pengiriman, riwayat produk yang telah dibeli, serta informasi mengenai perkembangan proyek yang telah diinvestasikan sebelumnya.</p>
            </div>
          </div>
      </div>
    </div>
    </section>
<!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="<?php echo base_url('asset/js/creative.min.js');?>"></script>

	<section id="contact-us">
        <div class="container">
          <div class="row">
           <div class="col-xl-4 col-md-12 col-sm-12 col-xs-12 logo_footer">
               <a href="<?php echo base_url(); ?>"><img src="<?php echo base_url('asset/assets/image/logo.png');?>" style="width: 280px; height: auto;"></a>
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
              <span class="fa fa-facebook-official socmed-icon"></span><span class="fa fa-twitter-square socmed-icon"></span><span class="fa fa-instagram socmed-icon"></span>
           </div>
          </div> 
      </div>
      </section>
	  </body>
</html>
