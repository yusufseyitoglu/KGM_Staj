<?php
session_start();
?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>e-KGM</title>
  </head>
  <body style="background-color:#EEEEEE">
  
  <?php
  error_reporting(0);

    $baglanti=new mysqli("localhost","root","","yol_durumu");
	$ts=true;
	if(isset($_POST['kaydet']))
	{	
		
		$sql="SELECT* FROM `yetkili` WHERE `kullanici_adi`='".$_POST['kullanici_adi']."' and `sifre`='".md5($_POST['sifre'])."' and `rol`='".$_POST['sehir']."'";
		$sonuc=$baglanti->query($sql);
		if($kayitlar=$sonuc->fetch_assoc())
		{
		
			$_SESSION['onay']=true;
			$_SESSION['rol']=$kayitlar['rol'];
		    header("Location:Yetkili_Sayfası.php");
		}
		
		else
			
		{
			$ts=false;
		}
		
	}
	
	if(@$_SESSION['onay'])
	{
		header("Location:Yetkili_Sayfası.php");
	}
  ?>
		<style>
		
			.navs
		{
				background: linear-gradient(to bottom,#F29221 0%,	#FFE0B2	 100%)

		}
		

		 .nav-item::after {
			 content: '';
			 display: block;
			 width: 0px;
			 height: 2px;
			 background:black;
			 transition: 0.4s
		 }

		 .nav-item:hover::after {
			 width: 100%
		 }
		 
		  @keyframes example2 {
 
   0%   {left:0px; bottom:200px;}
   25%  { left:0px; bottom:0px;}
   50%  { left:0px; bottom:0px;}
   75%  { left:0px; bottom:0px;}
   100% {left:0px; bottom:0px;}
}
.yolbildir
{
	position: relative;
  animation-name: example2;
  animation-duration: 5s;
}

@media screen and (max-width: 768px){
						
						
						.yazii
{
	position: relative;
  animation-name: example71;
  animation-duration: 5s;
}
@keyframes example71 {
 
   0%   {left:0px; left:150px;}
   25%  { left:0px; bottom:0px;}
   50%  { left:0px; bottom:0px;}
   75%  { left:0px; bottom:0px;}
   100% {left:0px; bottom:0px;}
}

}
		 
		</style>
		
		
	<div class="container">
		
	<div class="row">
	<div class="col-md-12">
	<nav class="navbar navbar-expand-md navbar-dark fixed-top shadow-lg navs" style="font-size:115%;font-family:Times New Roman">
    <a href="index.php"><img src="image/Kgm_logo.png" width="50" height="50" class="d-inline-block align-top" alt="" loading="lazy"></a>
	<?php
	$cihaz = $_SERVER['HTTP_USER_AGENT'];
		$iphone = strpos($cihaz,"iPhone");
		$android = strpos($cihaz,"Android");
		$ipod = strpos($cihaz,"iPod");
		if ($iphone == true || $android == true || $ipod == true)
		{
				echo "<p style='font-weight:bold;font-family:Times New Roman;font-size:17px' align='center'>KARAYOLLARI<br> 9.BÖLGE MÜDÜRLÜĞÜ</p>";
		}
		
		
	?>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto ">
		
        <li class="nav-item active">
          <a class="nav-link tt" href="index.php" style="top-width:10%;color:black">&#10003; Ana Sayfa <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Yol_Durumu_Bildir.php" style="top-width:10%;color:black;font-family:Didot">&#10148; Yol Durumu Bildir</a>
        </li>
		<li class="nav-item">
          <a class="nav-link yoldurumutakip" href="Yol_Durumu_Takip.php" style="top-width:10%;color:black;font-family:Times New Roman">&#10148; Yol Durumu Bildirim Takip</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Yetkili_Giris.php"style="top-width:10%;color:black;text-decoration-line: underline">&#10148; <strong>Yetkili Giriş</strong></a>
        </li><li class="nav-item">
          <a class="nav-link" href="Subeler.php"style="top-width:10%;color:black;font-family:Didot">&#10148; Şubeler</a>
        </li><li class="nav-item">
          <a class="nav-link" href="Bolge.php"style="top-width:10%;color:black;font-family:Didot">&#10148; Bölge</a>
        </li><li class="nav-item">
          <a class="nav-link" href="iletisim.php"style="top-width:10%;color:black;font-family:Didot">&#9742; İletişim</a>
        </li>
      </ul>
	    <p style="font-weight:bold;font-family:arial;font-size:15px;font-family:Times New Roman;opacity:0.9" class="yazii" align="center"> KARAYOLLARI 9. BÖLGE MÜDÜRLÜĞÜ &nbsp &nbsp &nbsp  </p>
    </div>
  </nav>
</div>
</div>		
</div><br>
<br><br>
<br><br><br>

<div class="container yolbildir">
		<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8" style="background-color:#ECEFF1">
		<?php if($ts==false){echo "<div class='alert alert-warning' align='center' style='font-weight:bold;font-size:20px'  role='alert'>&#10071;  Girdiğiniz Bilgiler Hatalı</div>";}?>
										
		<form class="form-signin" method="POST">
		  <center><img class="mb-4" src="image/Kgm_logo.png" alt="" width="100" height="100"></center>
		  <center><h1 class="h3 mb-3" style="font-weight:bold">Karayolları 9.Bölge Müdürlüğü</h1><center>
		  <center><h1 class="h3 mb-3 font-weight-normal">Lütfen Giriş Yapınız</h1><center>
		  <label for="inputEmail" class="sr-only">Kullanıcı Adı</label>
		  <input type="text" class="form-control  shadow-lg" placeholder="Kullanıcı Adı" required="" autofocus="" name="kullanici_adi"><br>
		  <label for="inputPassword" class="sr-only">Şifre</label>
		  <input type="password" class="form-control  shadow-lg" placeholder="Şifre" required="" name="sifre"><br>
		    <select id="inputState" class="form-control  shadow-lg" name="sehir">
				<option>9.Bölge Müdürlüğü</option>
				<option>91.Şube Şefliği Şanlıurfa</option>
				<option>92.Şube Şefliği Merkez</option>
				<option>93.Şube Şefliği Mardin</option>
				<option>94.Şube Şefliği Siirt</option>
				<option>95.Şube Şefliği Cizre</option>
				<option>96.Şube Şefliği Siverek</option>
				<option>97.Şube Şefliği Batman</option>
		  </select><br>
		 <button class="btn btn-lg btn-primary btn-block  shadow-lg" type="submit" name="kaydet">Giriş</button>
		</form>
		</div>
	</div>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>