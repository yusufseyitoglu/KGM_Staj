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
			error_reporting(0);//hataları kapat
			
			
  $baglanti=new mysqli("localhost","root","","yol_durumu");
error_reporting(0);


		/*	if(empty($_SERVER['HTTPS']) || $_SERVER['HTTPS'] == "off"){
    $redirect = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    header('HTTP/1.1 301 Moved Permanently');
    header('Location: ' . $redirect);
    exit();
}*/


?>
		
	<style>
	#mainslider
		{
			margin-top:5%;
			margin-left:10%;
			margin-right:10%;	
			height:50%;
			
					
		}
		
			@media screen and (max-width: 768px){
			
			#mainslider
			{
				margin-top:25%;
			    height:25%;
			}
			
			
			
		}
					@media screen and (max-width: 768px){
						
						.tanitim
						{
							font-size:20px;	
						}
						
						

					}
					
					
					
		.navs
		{
			background: linear-gradient(to bottom,#F29221 0%,	#FFE0B2	 100%)

		}
		
		
		.ty
		{
			
			
			background: linear-gradient(45deg,				#ECEFF1, 		#FFF8E1,		#FFECB3,			#ECEFF1);
			background-size: 500% 500%;
			animation: animeBG 3s ease infinite;
			animation-direction: alternate;
		

		}

		.rd
		{
			background: linear-gradient(to bottom,#F29221 0%,	#FFE0B2	 100%)

		}
		 .nav-item::after {
			 content: '';
			 display: block;
			 width: 0px;
			 height: 2px;
			 background:black;
			 transition: 0.4s;
		 }

		 .nav-item:hover::after {
			 width: 100%;
		 }
		 
		

		@keyframes animeBG {
			0% {background-position: 0%}
			100% {background-position: 100%}
		}
		
		.loader {
    position: fixed;
    z-index: 99;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: white;
    display: flex;
    justify-content: center;
    align-items: center;
}

.loader > img {
    width: 190px;
}

.loader.hidden {
    animation: fadeOut 1s;
    animation-fill-mode: forwards;
}

@keyframes fadeOut {
    100% {
        opacity: 0;
        visibility: hidden;
    }
}

.thumb {
    height: 100px;
    border: 1px solid black;
    margin: 7px;
}

.sd
{
	position: relative;
  animation-name: example;
  animation-duration: 10s;
}

@keyframes example {
 
   0%   {left:150px; top:0px;}
   25%  { left:0px; top:0px;}
   50%  { left:0px; top:0px;}
   75%  { left:0px; top:0px;}
   100% {left:0px; top:0px;}
}

.asayfa
{
	position: relative;
  animation-name: example2;
  animation-duration: 4s;
}
@keyframes example2 {
 
   0%   {left:0px; bottom:150px;}
   25%  { left:0px; bottom:0px;}
   50%  { left:0px; bottom:0px;}
   75%  { left:0px; bottom:0px;}
   100% {left:0px; bottom:0px;}
}
.yolbildir
{
	position: relative;
  animation-name: example3;
  animation-duration: 6s;
}
@keyframes example3 {
 
   0%   {left:0px; bottom:150px;}
   25%  { left:0px; bottom:0px;}
   50%  { left:0px; bottom:0px;}
   75%  { left:0px; bottom:0px;}
   100% {left:0px; bottom:0px;}
}
.yoldurumutakip
{
	position: relative;
  animation-name: example4;
  animation-duration: 8s;
}
@keyframes example4 {
 
   0%   {left:0px; bottom:150px;}
   25%  { left:0px; bottom:0px;}
   50%  { left:0px; bottom:0px;}
   75%  { left:0px; bottom:0px;}
   100% {left:0px; bottom:0px;}
}

.yetkiligiris
{
	position: relative;
  animation-name: example5;
  animation-duration: 8s;
}
@keyframes example5 {
 
   0%   {left:0px; bottom:150px;}
   25%  { left:0px; bottom:0px;}
   50%  { left:0px; bottom:0px;}
   75%  { left:0px; bottom:0px;}
   100% {left:0px; bottom:0px;}
}
.subelerr
{
	position: relative;
  animation-name: example6;
  animation-duration: 9s;
}
@keyframes example6 {
 
   0%   {left:0px; bottom:150px;}
   25%  { left:0px; bottom:0px;}
   50%  { left:0px; bottom:0px;}
   75%  { left:0px; bottom:0px;}
   100% {left:0px; bottom:0px;}
}
.bolgee
{
	position: relative;
  animation-name: example7;
  animation-duration: 10s;
}
@keyframes example7 {
 
   0%   {left:0px; bottom:150px;}
   25%  { left:0px; bottom:0px;}
   50%  { left:0px; bottom:0px;}
   75%  { left:0px; bottom:0px;}
   100% {left:0px; bottom:0px;}
}


.iletisimm
{
	position: relative;
  animation-name: example7;
  animation-duration: 12s;
}
@keyframes example7 {
 
   0%   {left:0px; bottom:150px;}
   25%  { left:0px; bottom:0px;}
   50%  { left:0px; bottom:0px;}
   75%  { left:0px; bottom:0px;}
   100% {left:0px; bottom:0px;}
}

.yazii
{
	position: relative;
  animation-name: example9;
  animation-duration: 15s;
}
@keyframes example9 {
 
   0%   {left:0px; bottom:150px;}
   25%  { left:0px; bottom:0px;}
   50%  { left:0px; bottom:0px;}
   75%  { left:0px; bottom:0px;}
   100% {left:0px; bottom:0px;}
}

@media screen and (max-width: 768px){
						
						
						.asayfa
{
	position: relative;
  animation-name: example2;
  animation-duration: 1s;
}
@keyframes example2 {
 
   0%   {left:0px; bottom:150px;}
   25%  { left:0px; bottom:0px;}
   50%  { left:0px; bottom:0px;}
   75%  { left:0px; bottom:0px;}
   100% {left:0px; bottom:0px;}
}
.yolbildir
{
	position: relative;
  animation-name: example3;
  animation-duration: 1s;
}
@keyframes example3 {
 
   0%   {left:0px; bottom:150px;}
   25%  { left:0px; bottom:0px;}
   50%  { left:0px; bottom:0px;}
   75%  { left:0px; bottom:0px;}
   100% {left:0px; bottom:0px;}
}
.yoldurumutakip
{
	position: relative;
  animation-name: example4;
  animation-duration: 1s;
}
@keyframes example4 {
 
   0%   {left:0px; bottom:150px;}
   25%  { left:0px; bottom:0px;}
   50%  { left:0px; bottom:0px;}
   75%  { left:0px; bottom:0px;}
   100% {left:0px; bottom:0px;}
}

.yetkiligiris
{
	position: relative;
  animation-name: example5;
  animation-duration: 1s;
}
@keyframes example5 {
 
   0%   {left:0px; bottom:150px;}
   25%  { left:0px; bottom:0px;}
   50%  { left:0px; bottom:0px;}
   75%  { left:0px; bottom:0px;}
   100% {left:0px; bottom:0px;}
}
.subelerr
{
	position: relative;
  animation-name: example6;
  animation-duration: 1s;
}
@keyframes example6 {
 
   0%   {left:0px; bottom:150px;}
   25%  { left:0px; bottom:0px;}
   50%  { left:0px; bottom:0px;}
   75%  { left:0px; bottom:0px;}
   100% {left:0px; bottom:0px;}
}
.bolgee
{
	position: relative;
  animation-name: example7;
  animation-duration: 1s;
}
@keyframes example7 {
 
   0%   {left:0px; bottom:150px;}
   25%  { left:0px; bottom:0px;}
   50%  { left:0px; bottom:0px;}
   75%  { left:0px; bottom:0px;}
   100% {left:0px; bottom:0px;}
}


.iletisimm
{
	position: relative;
  animation-name: example7;
  animation-duration: 1s;
}
@keyframes example7 {
 
   0%   {left:0px; bottom:150px;}
   25%  { left:0px; bottom:0px;}
   50%  { left:0px; bottom:0px;}
   75%  { left:0px; bottom:0px;}
   100% {left:0px; bottom:0px;}
}

.yazii
{
	position: relative;
  animation-name: example9;
  animation-duration: 3s;
}
@keyframes example9 {
 
   0%   {left:0px; left:150px;}
   25%  { left:0px; bottom:0px;}
   50%  { left:0px; bottom:0px;}
   75%  { left:0px; bottom:0px;}
   100% {left:0px; bottom:0px;}
}

						

					}

</style>
	</style>
<script>
window.addEventListener("load", function () {
    const loader = document.querySelector(".loader");
    loader.className += " hidden"; // class "loader hidden"
});
</script>

<!--<div class="loader">
    <img src="image/Kgm_logo2.png" alt="Loading..." />
</div>-->


	<div class="container">
	<div class="row">
	<div class="col-md-12">
	<nav class="navbar navbar-expand-md navbar-dark fixed-top shadow-lg navs" style="font-size:115%">
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
		
        <li class="nav-item active" class="asayfa">
          <a class="nav-link tt asayfa" href="index.php" style="top-width:10%;color:black;font-family:Times New Roman">&#10003; <strong style="text-decoration-line: underline;">Ana Sayfa</strong> <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link yolbildir" href="Yol_Durumu_Bildir.php" style="top-width:10%;color:black;font-family:Times New Roman">&#10148; Yol Durumu Bildir</a>
        </li>
		<li class="nav-item">
          <a class="nav-link yoldurumutakip" href="Yol_Durumu_Takip.php" style="top-width:10%;color:black;font-family:Times New Roman">&#10148; Yol Durumu Bildirimi Takip</a>
        </li>
        <li class="nav-item">
          <a class="nav-link yetkiligiris" href="Yetkili_Giris.php"style="top-width:10%;color:black;font-family:Didot">&#10148; Yetkili Giriş</a>
        </li><li class="nav-item">
          <a class="nav-link subelerr" asayfa href="Subeler.php"style="top-width:10%;color:black;font-family:Didot">&#10148; Şubeler</a>
        </li><li class="nav-item">
          <a class="nav-link bolgee" href="bolge.php"style="top-width:10%;color:black;font-family:Didot">&#10148; Bölge</a>
        </li><li class="nav-item">
          <a class="nav-link iletisimm" href="iletisim.php"style="top-width:10%;color:black;font-family:Didot">&#9742; İletişim</a>
        </li>
      </ul>
	    <p style="font-weight:bold;font-family:arial;font-size:15px;font-family:Times New Roman;opacity:0.9" class="yazii" align="center"> KARAYOLLARI 9. BÖLGE MÜDÜRLÜĞÜ &nbsp &nbsp &nbsp  </p>
		</div>
	  </nav>
	</div>
	</div>

		<script>
		$('.carousel').carousel({
		  interval: 200
		})
		</script>
		<br>	
		

		
<br>		<br>
		<br>
		
</div>

<div class="row">
<div class="col-md-1">
</div>
		<div class="col-md-10">
<div id="carouselExampleIndicators" class="carousel slide shadow-lg sd" data-ride="carousel">
<div class="row">
			<div class="col-md-12">
				<marquee direction=right style="font-weight:bold;font-size:15px">Karayolları 9.Bölge Müdürlüğü</marquee>
			</div>
		</div>
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner shadow-lg">
    <div class="carousel-item active">
      <img src="image/b9.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="image/q.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="image/r2.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
			</div>
			
			<div class="col-md-1">
</div>
			</div>
			<br>			<br>

		<div class="container">
		<div class="row mb-2">
			<div class="col-md-6 ">
			  <div class="rd row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-lg h-md-250 position-relative tw">
				<div class="col p-4 d-flex flex-column position-static ty shaow-lg">
				  <strong class="d-inline-block mb-2 text-primary">KGM</strong>
				  <h3 class="mb-0 tanitim">Karayolları 9.Bölge Müdürlüğü</h3><br>
				  <p class="card-text mb-auto">Bölgemiz Sınırlarında Yolculuk Yaparken Karşılaştığınız Yol Problemlerini Anında İletin...</p>
				</div>
			<a href="index.php"  class="background-color:orange"><img src="image/Kgm_logo.png" width="50" height="50" class="d-inline-block align-top ty" alt="" loading="lazy"></a>
			  </div>
			</div>
			<div class="col-md-6">
			  <div class="rd row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-lg h-md-250 position-relative">
				<div class="col p-4 d-flex flex-column position-static ty  shaow-lg">
				  <strong class="d-inline-block mb-2 text-success">KGM</strong>
				  <h3 class="mb-0 tanitim">Karayolları 9.Bölge Müdürlüğü</h3><br>
				  <p class="card-text mb-auto">Bildirilen Yol Problemleri İlgili Birimlere İletilecektir...<br><br></p>
				</div>
			<a href="index.php" class="background-color:orange"><img src="image/Kgm_logo.png" width="50" height="50" class="d-inline-block align-top ty" alt="" loading="lazy"></a>
			  </div>
			</div>
		  </div>
			</div>
			<br>			<br>

		<footer  style="background-color:		#ECEFF1" class="shadow-lg">
		 <p align="center" style="font-weight:bold">Karayolları 9.Bölge Müdürlüğü 2020</a>

		 		 <p align="center">Logo ve bazı resimler www.kgm.gov.tr'den alınmıştır</a><br>
<!-- Button trigger modal -->
<a style="color:blue;text-decoration-line:underline" data-toggle="modal" data-target="#staticBackdrop">
Site Kullanım Şartları</a>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header"  style="background-color:red;color:white">
        <h5 class="modal-title" id="staticBackdropLabel">&#10071;  Site Kullanım Şartları</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       
	   
      </div>
      <div class="modal-footer">
<button type="button" class="btn btn-warning" data-dismiss="modal">Anladım</button>      </div>
    </div>
  </div>
</div>
		</footer>
		
		
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>