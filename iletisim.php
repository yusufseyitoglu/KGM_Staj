<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
		<link rel="stylesheet" href="dizayn.css">

    <title>e-KGM</title>
  </head>
  <body  style="background-color:#EEEEEE">
  
  <style>


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
			.card
		{
			background: linear-gradient(to bottom,	#CFD8DC 0%,#ECEFF1	 100%)
		}			

		.cr
		{
			background: linear-gradient(to bottom,	#90A4AE	 0%,	#CFD8DC 100%)
		}	
		
		
		.navs
		{
						background: linear-gradient(to bottom,#F29221 0%,	#FFE0B2	 100%)

		}
		
		@media 
		only screen and (max-width: 760px),
		(min-device-width: 768px) and (max-device-width: 1024px)  {
				.stil
				{
						width:100%;
				}					
		}
		
		 @keyframes example2 {
 
   0%   {left:0px; left:300px;}
   25%  { left:0px; left:0px;}
   50%  { left:0px; left:0px;}
   75%  { left:0px; left:0px;}
   100% {left:0px; left:0px;}
}
.a1
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
	error_reporting(0);

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
          <a class="nav-link" href="Yetkili_Giris.php"style="top-width:10%;color:black;font-family:Didot">&#10148; Yetkili Giriş</a>
        </li><li class="nav-item">
          <a class="nav-link" href="Subeler.php"style="top-width:10%;color:black;font-family:Didot">&#10148; Şubeler</a>
        </li><li class="nav-item">
          <a class="nav-link" href="Bolge.php"style="top-width:10%;color:black;font-family:Didot">&#10148; Bölge</a>
        </li><li class="nav-item">
          <a class="nav-link" href="iletisim.php"style="top-width:10%;color:black;font-family:Didot;text-decoration-line: underline">&#9742; <strong>İletişim</strong></a>
        </li>
      </ul>
	    <p style="font-weight:bold;font-family:arial;font-size:15px;font-family:Times New Roman;opacity:0.9" class="yazii" align="center"> KARAYOLLARI 9. BÖLGE MÜDÜRLÜĞÜ &nbsp &nbsp &nbsp  </p>
    </div>
  </nav>
  
  
</div>
</div>
 
 <br> <br>
 <br>
 <br>
 <br>

 <div class="container a1">
	<div class="row">	
		<div class="col-md-12">
			<div class="card  shadow-lg">
			  <img src="image/Kgm_logo.png" style="width:50;height:50" class="card-img-top" alt="..."><p style="font-weight:bold" align="center">Karayolları 9.Bölge Müdürlüğü</span>
			  <div class="card-body stil">
				<p class="card-text">
					<span style="font-weight:bold">Adres: </span>Karayolları 9.Bölge Müdürlüğü Büyükalp Cad. 21100​ Yenişehir/DİYARBAKIR  <br><br>
					<span style="font-weight:bold">Telefon: </span>412 - 241 02 00 (10 hat)<br><br>
					<span style="font-weight:bold">Fax:</span> 412 - 241 02 82<br><br>
					<span style="font-weight:bold">eposta:</span> bol09@kgm.gov.tr<br><br>
				</p>
			  </div>
			</div>
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