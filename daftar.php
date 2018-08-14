<!DOCTYPE html>
<html>
<head>
   <link rel="icon" href="assets/image/logo.png">
  <title>inseed.id -  Daftar</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/styleCSS.css">
  <link rel="stylesheet" href="css/jcarousel.responsive.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
  <script src="js/jcarousel.responsive.js"></script>
  <script src="js/jquery.jcarousel.min.js"></script>
</head>

<body>
  <section id="header">
<nav class="navbar navbar-expand-lg navbar-light bg-white" id="header">
 <a href="index.php"><img src="assets/image/logo.png" style=" padding: 0 20px 0 20px;
    height: 75px;
    width: 250px;"></a> 
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
 

  <div class="collapse navbar-collapse " id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">HOME <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">SEAWEED INVEST</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="#">SEAWEED MART</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="article.php">SEAWEED ARTICLE</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="about_us.php">TENTANG KAMI</a>
      </li>
     <li class="nav-item">
        <a class="nav-link" href="login.php">MASUK</a>
      </li>
    </ul>
  </div>
</nav>
  </section>

  <section id="signup Page" >
  <div class="headSignUp">
  <h1>YUK GABUNG KITA SEKARANG!</h1>
  <h5>Daftarkan akun anda secara gratis!</h5>
  </div>
  
    
<div class = "container">
  <div class="col-xl-6 col-md-6 col-sm-12 col-xs-12" style="margin: 10% auto;">
  <div class ="card" id="cardDaftar">
    <div class="card-body" id="abu">
        <h5 style="text-align: center;">Hai, masukkan data pada kolom tersedia!</h5><br>
        <form action="insert.php" method="POST" class="col-md-12 col-sm-12 col-xs-12" style="float: left;">
  <div class="form-group" >
    <input type="text" class="form-control" placeholder="Nama Depan" name="firstname" >
    <input type="text" class="form-control" placeholder="Nama Belakang" name="lastname">
	<input type="date" class="form-control" name="birthday" min="1980-01-01" required pattern="[0-9]{4}-[0-9]{2}-[0-9]{2}"/>

      <select class="form-control" id="JenisKelamin">
      <option value="Pria">Pria</option>
      <option value="Wanita">Wanita</option>
   </select>

	<input type="text" class="form-control" placeholder="Nama Akun" name="account" >
	<input type="email" class="form-control" placeholder="Email" name="email" >
    <input type="password" class="form-control" placeholder="Password" name="password" id="pw1">
	<input type="password" class="form-control" placeholder="Ulangi Password" name="password2" id="pw2">
	  <script type="text/javascript">
    window.onload = function () {
        document.getElementById("pw1").onchange = validatePassword;
        document.getElementById("pw2").onchange = validatePassword;
    }

    function validatePassword(){
    var pass2=document.getElementById("pw2").value;
    var pass1=document.getElementById("pw1").value;
    if(pass1!=pass2)
        document.getElementById("pw2").setCustomValidity("Passwords Tidak Sama, Coba Lagi");
    else
        document.getElementById("pw2").setCustomValidity('');
    }
</script>

    <input type="text" class="form-control" placeholder="No. Handphone" name="phone">
	<p style="text-align: justify;">Dengan menekan Daftar Sekarang, saya mengonfirmasi telah menyetujui <a href="#">Syarat dan Ketentuan</a>, serta <a href="#">Kebijakan Privasi</a> inseed.id</p>
  <div class="col-xl-12 col-md-12 col-xs-12 col-sm-12" style="text-align: center;"> 

         <button type="submit" class="btn btn-outline-primary" style="padding: 2% 20%; margin: 5% 0">DAFTAR SEKARANG</button>
</div>

  </div>
</div>
</div>
</div>
</form>
  </section>
  <section id="contact-us">
        <div class="container">
          <div class="row">
           <div class="col-xl-4 col-md-12 col-sm-12 col-xs-12 logo_footer">
               <a href="index.php"><img src="assets/image/logo.png" style="width: 280px; height: auto;"></a>
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