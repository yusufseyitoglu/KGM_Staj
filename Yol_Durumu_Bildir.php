<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>e-KGM</title>
  </head>
  <body  style="background-color:#EEEEEE">
  
  <?php

  error_reporting(0);


  $baglanti=new mysqli("localhost","root","","yol_durumu");
  date_default_timezone_set('Europe/Istanbul');//türkiye saat dilimi
  $y=false;
 $vs="hidden";
	$d="background-color:'white'";
	if(isset($_POST['kaydet']))
	{
		
	$TC = $_POST["tckn"];
	if (strlen($TC) == 11) {
		if (is_numeric($TC)) {
			$TC_10 = ((($TC[0] + $TC[2] + $TC[4] + $TC[6] + $TC[8])*7) - ($TC[1] + $TC[3] + $TC[5] + $TC[7])) % 10;
			if ($TC_10 == $TC[9]) {
				$TC_11 = ($TC[0] + $TC[1] + $TC[2] + $TC[3] + $TC[4] + $TC[5] + $TC[6] + $TC[7] + $TC[8] + $TC[9]) % 10;
				if ($TC_11 == $TC[10]) {
						$y=true;
							if(strlen($_POST['tel_no'])==11)
							{
								
								
								$sql="INSERT INTO `bildirim` (`id`, `ad`, `soyad`, `tckn`, `tel_no`,`yol_sorunu`,`tarih`,`gun`,`yil`,`ip`,`engel`) VALUES (NULL, '".htmlspecialchars(addslashes(strip_tags($_POST['ad'])))."', '".htmlspecialchars(addslashes(strip_tags($_POST['soyad'])))."', '".htmlspecialchars(addslashes(strip_tags($_POST['tckn'])))."', '".htmlspecialchars(addslashes(strip_tags($_POST['tel_no'])))."', '".htmlspecialchars(addslashes(strip_tags($_POST['yol_sorunu'])))."', '".date('d.m.Y H:i:s')."','".date('y-m-d')."','".date('Y-m-d')."','".$_SERVER['REMOTE_ADDR']."','0');";
								$baglanti->query($sql);
								$vs="visible";
								
								
							}
							else if(strlen($_POST['tel_no'])<11)
							{
								$d="background-color:'red'";
							}
					}
				}
				}
			}  
	}
	
			$İPPORT=$_SERVER['REMOTE_ADDR'];
			$sql="SELECT* FROM `bildirim`";
			  $sonuc=$baglanti->query($sql);
			while($kayit=$sonuc->fetch_assoc())
			{
				if($İPPORT==$kayit['ip'])
				{
					if($kayit['engel']=="1")
					{
						header("Location:erisimengellendi.php");
					}
					
					
				}
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
 
   0%   {left:0px; top:200px;}
   25%  { left:0px; top:0px;}
   50%  { left:0px; top:0px;}
   75%  { left:0px; top:0px;}
   100% {left:0px; top:0px;}
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
  animation-name: example2;
  animation-duration: 5s;
}
@keyframes example2 {
 
   0%   {left:0px; left:150px;}
   25%  { left:0px; bottom:0px;}
   50%  { left:0px; bottom:0px;}
   75%  { left:0px; bottom:0px;}
   100% {left:0px; bottom:0px;}
}

}

		</style>
		
		
		<div class="container">
		
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
          <a class="nav-link" href="Yol_Durumu_Bildir.php" style="top-width:10%;color:black;text-decoration-line: underline">&#10148; <strong>Yol Durumu Bildir</strong></a>
        </li>
		<li class="nav-item">
          <a class="nav-link yoldurumutakip" href="Yol_Durumu_Takip.php" style="top-width:10%;color:black;font-family:Times New Roman">&#10148; Yol Durumu Bildirimi Takip</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Yetkili_Giris.php"style="top-width:10%;color:black;font-family:Didot">&#10148; Yetkili Giriş</a>
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
</div>

<br>
<br>
<br>

	<div class="alert alert-success" style="visibility:<?php echo $vs;?>;font-weight:bold;font-size:20px" align="center"  role="alert" style="font-weight:bold">
	  <span align="left">&#10004;</span>Yol Problemi İletildi.
	</div>
	<div class="container yolbildir">
		  <center><img class="mb-4" src="image/Kgm_logo.png"   alt="" width="100" height="100"></center>

	<div class="row">
	<div class="col-md-1">
	</div>
		<div class="col-md-10"  style="background-color:#ECEFF1">
		<p align="center" style="font-size:30px;font-weight:bold">Yol Sorunu Bildir</p>
	<form method="POST" name="frm">
		<div class="form-row">
			<div class="form-group col-md-6">
			<label for="inputEmail4" style="font-weight:bold" >Ad</label>
			<input type="text" class="form-control shadow-lg" name="ad" required value="<?php if(isset($_POST['kaydet'])){if($y==false||strlen($_POST['tel_no'])!=11){echo $_POST['ad'];}}?>" >
				
		</div>
		<div class="form-group col-md-6">
		  <label for="inputEmail4" style="font-weight:bold">Soyad</label>
		  <input type="text" class="form-control  shadow-lg" name="soyad" required value="<?php if(isset($_POST['kaydet'])){if($y==false||strlen($_POST['tel_no'])!=11){echo $_POST['soyad'];}}?>">
		  
		  
		</div>
	  </div>
	  <div class="form-row">
	  <div class="form-group col-md-6">
		<label for="inputAddress" style="font-weight:bold">TC Kimlik No</label>
		<input type="text" maxlength = "11"  required value="<?php if(isset($_POST['kaydet'])){if($y==false||strlen($_POST['tel_no'])!=11){echo $_POST['tckn'];}}?>" name="tckn" class="form-control  shadow-lg" id="inputAddress">
		
			<?php
			if(isset($_POST['kaydet']))
			{
				if($y==false)
				{
		?>
		<div class="alert alert-danger" role="alert" style="font-weight:bold">
	 &#10071; Girdiğiniz TC KİMLİK Numarası Geçersiz
	</div>
	<?php
		}}
	?>
		
  </div>
  <div class="form-group col-md-6">
    <label for="inputAddress" style="font-weight:bold">Tel No</label>
    <input type="text"  maxlength = "11" value="0" required name="tel_no"  value="<?php if(isset($_POST['kaydet'])){if($y==false||strlen($_POST['tel_no'])!=11){echo $_POST['tel_no'];}}?>" class="form-control  shadow-lg" id="inputAddress" placeholder="(0...).......">
	<?php
		if(isset($_POST['kaydet']))
		{
			if(strlen($_POST['tel_no'])!=11)
			{
	?>
		<div class="alert alert-danger" role="alert" style="font-weight:bold">
	 &#10071; Girdiğiniz TELEFON NUMARASI Geçersiz 
	</div>
	<?php
		}}
	?>
	</div>
		</div>
		<div class="form-row">
		</div>
		  <div class="form-group">
			<label for="inputAddress2" style="font-weight:bold">Yol Sorunu</label>
			<textarea type="text" class="form-control  shadow-lg" name="yol_sorunu" value="<?php if(isset($_POST['kaydet'])){if($y==false||strlen($_POST['tel_no'])!=11){echo $_POST['yol_sorunu'];}}?>" required rows="4" placeholder="Lütfen Yol Problemini Ve Yolun Konumunu Yazınız"></textarea>
		  </div>
		  <center><input  type="submit" class="btn btn-primary  shadow-lg" name="kaydet" style="width:100%;font-weight:bold;font-size:19px"></center>
		<br>
		<br>
		</form>
		</div>
		<div class="col-md-1">
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