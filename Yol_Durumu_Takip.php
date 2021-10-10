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

			

?>
		
	<style>
	
		
			@media screen and (max-width: 768px){
			
			.txt
			{
				width:100%;
			}
			
			
			
		}
		
		.txt
		{
			width:60%;
		}
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
			 transition: 0.4s;
		 }

		 .nav-item:hover::after {
			 width: 100%;
		 }
		 
		 
		 .table
{
	position: relative;
  animation-name: example9;
  animation-duration: 7s;
}
@keyframes example9 {
 
   0%   {left:0px; top:150px;}
   25%  { left:0px; top:0px;}
   50%  { left:0px; top:0px;}
   75%  { left:0px; top:0px;}
   100% {left:0px; top:0px;}
}
	
	
		.responsive-table{overflow-x: auto}
	
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
	</style>


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
          <a class="nav-link tt asayfa" href="index.php" style="top-width:10%;color:black;font-family:Times New Roman">&#10003; Ana Sayfa <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link yolbildir" href="Yol_Durumu_Bildir.php" style="top-width:10%;color:black;font-family:Times New Roman">&#10148; Yol Durumu Bildir</a>
        </li>
		<li class="nav-item">
          <a class="nav-link yoldurumutakip" href="Yol_Durumu_Takip.php" style="top-width:10%;color:black;font-family:Times New Roman">&#10148; <strong style="text-decoration-line: underline;">Yol Durumu Bildirim Takip</strong></a>
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
		
		<div class="card text-center shadow-lg">
  <div class="card-header">
    KARAYOLLARI 9.BÖLGE MÜDÜRLÜĞÜ
  </div>
  <div class="card-body">
    <h5 class="card-title">Yol Durumu Bildirim Takip</h5>
    <p class="card-text">Bildirdiğiniz Yol Problemini Buradan Takibini Gerçekleştirebilirsiniz.</p>
	<form method="POST">
		<center><input type="text" maxlength = "11" class="form-control txt" name="tcno"  placeholder="TC Kimlik Numaranızı Giriniz..."></center><br>
		
    <button class="btn btn-primary" type="submit" name="kontrolet">Kontrol Et</button>
	
	</form>
  </div>
  <div class="card-footer text-muted">
  </div>
</div>

<br>

		<?php
			if(isset($_POST['kontrolet']))
			{
				
				echo "<div class='responsive-table'>";
				echo "<table class='table table-bordered'>
					  <thead class='thead-dark'>";
				echo "<tr>
				<th>Yol Durumu Bildirimi</th>
				<th>Durum</th></tr>";

					
				  $sql="SELECT* FROM `bildirim` WHERE tckn='".htmlspecialchars($_POST['tcno'])."'";
				  $sonuc=$baglanti->query($sql);
				  while($kayit=$sonuc->fetch_assoc())
				  {
		?>
					<tr>
						<td style="font-family:Times New Roman;font-weight:bold;background-color:	#ECEFF1	"><?php echo $kayit['yol_sorunu'];?></td>
						<td style="font-family:Times New Roman;font-size:17px;font-weight:bold;background-color:	#ECEFF1;background-color:<?php if($kayit['durum']=="Çözüldü"){echo "	#C8E6C9";} else{echo "			#FFCCBC";}?>"><?php if($kayit['durum']=="Çözüldü"){echo "Çözüldü";} else{echo "İletildi/Çözüm Aşamasında";}?></td>
						
					</tr>					
						
		<?php
				  }
				  
			    echo "</thead></table></div>";

			}
		?>
		
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>