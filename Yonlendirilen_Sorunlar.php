<?php
session_start();

if(!@$_SESSION['onay'])
{
	header("Location:Yetkili_Giris.php");
}

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
			$d;
	if(isset($_POST['yonlendir']))
	{

			
			$sql="UPDATE `bildirim` SET `sehir` = '".$_POST['sehirler']."' WHERE `bildirim`.`id` = '".$_POST['gizli1']."';";
			$baglanti->query($sql);

	}
	
	if(isset($_POST['cozuldu']))
	{

		if($_POST['sehirler']=='9.Bölge Müdürlüğü')
		{
			$sql="UPDATE `bildirim` SET `sehir` = '".$_POST['sehirler']."' WHERE `bildirim`.`id` = '".$_POST['gizli1']."';";
			$baglanti->query($sql);
			$sql2="UPDATE `bildirim` SET `durum` = 'Çözüldü' WHERE `bildirim`.`id` = '".$_POST['gizli1']."';";
			$baglanti->query($sql2);
		}

			$sql="UPDATE `bildirim` SET `durum` = 'Çözüldü' WHERE `bildirim`.`id` = '".$_POST['gizli1']."';";
			$baglanti->query($sql);
	}
	
  ?>
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

		
		@media screen and (max-width: 768px) {
				.card
				{
					width:100%;
				}

				.card2
				{
					width:100%;
				}	
				
				
		.panell
		{
			font-size:20px;
		}
		}
			 
		.card
		{
			background: linear-gradient(to bottom,		#FFE0B2 0%,#ECEFF1	 100%)
		}			

		.cr
		{
			background: linear-gradient(to bottom,				#F9A825	 0%,		#FFF8E1	 100%)
		}	
		.navs
		{
			background: linear-gradient(to bottom,#F29221 0%,	#FFE0B2	 100%)

		}
		
		.acilis
		{
			position: relative;
		  animation-name: example9;
		  animation-duration: 3s;
		}
		@keyframes example9 {
		 
		   0%   {left:0px; top:100px;}
		   25%  { left:0px; top:0px;}
		   50%  { left:0px; top:0px;}
		   75%  { left:0px; top:0px;}
		   100% {left:0px; top:0px;}
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
          <a class="nav-link" href="Yetkili_Giris.php"style="top-width:10%;color:black;font-family:Didot;text-decoration-line: underline">&#10148; <strong>Yetkili Giriş</strong></a>
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
<br><br><br><br><br>
<div class="row">
<div class="col-md-2 panell">
<div <?php
		$cihaz = $_SERVER['HTTP_USER_AGENT'];
		$iphone = strpos($cihaz,"iPhone");
		$android = strpos($cihaz,"Android");
		$ipod = strpos($cihaz,"iPod");
		if ($iphone == false && $android == false && $ipod == false)
		{
				echo "style='position:fixed'";
		}
?>>
		<nav class="d-md-block card2" style="background-color:#E8EAF6">
      <div class="sidebar-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <p class="nav-link active" href="#" style="font-weight:bold;font-family:Times New Roman;font-size:17.7px">
             KULLANIM PANELİ <span class="sr-only">(current)</span>
            </p>			<hr>

          </li>
          <li class="nav-item">
            <a class="nav-link" href="Yetkili_Sayfası.php" style="font-family:Times New Roman">
			&#8987; Güncel Yol Sorunları  <span class="badge badge-primary">
			<?php
				$sql="select* from `bildirim`";
				$sonuc=$baglanti->query($sql);
				$sayi=0;
					while($kayit=$sonuc->fetch_assoc())
					{
						if(($kayit['durum']!="Çözüldü"&&$kayit['sehir']==$_SESSION['rol'])||($kayit['durum']!="Çözüldü"&&$_SESSION['rol']=="9.Bölge Müdürlüğü"))
						{
							if($kayit['sehir']=="")
							{
							$sayi++;
							}
						}
					}
				echo $sayi;
			?>
		  </span>
            </a>
          </li>
		 <?php
				if($_SESSION['rol']=="9.Bölge Müdürlüğü")
				{
		  ?>
		  <li class="nav-item">
            <a class="nav-link" href="Yonlendirilen_Sorunlar.php"  style="font-family:Times New Roman">
			&#9208; <strong>Yönlendirilen Sorunlar  <span class="badge badge-primary">
			<?php
				$sql="select* from `bildirim`";
				$sonuc=$baglanti->query($sql);
				$sayi=0;
					while($kayit=$sonuc->fetch_assoc())
					{
						if(($kayit['durum']!="Çözüldü"&&$kayit['sehir']==$_SESSION['rol'])||($kayit['durum']!="Çözüldü"&&$_SESSION['rol']=="9.Bölge Müdürlüğü"))
						{
							if($kayit['sehir']!="")
							{
								$sayi++;
							}
						}
					}
				echo $sayi;
			?>
		  </span></strong>
            </a>
          </li>
		  <?php
				}
		  ?>
          <li class="nav-item">
            <a class="nav-link" href="Yol_Bildirim_Detayları.php"  style="font-family:Times New Roman">
             &#127344; Yol Bildirim Detayları
            </a>
          </li>
		  <?php
				if($_SESSION['rol']=="9.Bölge Müdürlüğü")
				{
		  ?>
          <li class="nav-item">
            <a class="nav-link" href="Yetkili_Kullanici_İslemleri.php"  style="font-family:Times New Roman">
            &#9989;  Yetkili Kullanıcı İşlemleri
            </a>
          </li>
		  <?php
				}
		  ?>
		  
		 
          <li class="nav-item">
            <a class="nav-link" href="Gecmis_Kayitlar.php"  style="font-family:Times New Roman">
            &#9201; Geçmiş Kayıtlar <span class="badge badge-primary">
	  
			<?php
				$sql="select* from `bildirim`";
				$sonuc=$baglanti->query($sql);
				$sayi=0;
					while($kayit=$sonuc->fetch_assoc())
					{
						if($kayit['durum']=="Çözüldü")
						{
							if($kayit['sehir']==$_SESSION['rol']||$_SESSION['rol']=="9.Bölge Müdürlüğü")
							{
							$sayi++;
							}
						}
					}
				echo $sayi;
				
				
			
			
			?>
			
			
		  </span>
            </a>
          </li>
		  
		   <?php
				if($_SESSION['rol']=="9.Bölge Müdürlüğü")
				{
		  ?>
		  <li class="nav-item">
            <a class="nav-link" href="Yedek_Kayitlar.php"  style="font-family:Times New Roman">
             &#127760; Yedek Kayıtlar
            </a>
          </li>
		  <?php
				}
		  ?>
		  
          <li class="nav-item">
            <a class="nav-link" href="Panel.php">
             &#10068; Paneli Nasıl Kullanırım?
			 	 </a>		


						
			

          </li>
          <li class="nav-item">
            <a class="nav-link" href="Cikis.php">
             &#10060; Çıkış Yap 
            </a>
          </li>
        </ul>
      </div>
    </nav>
      </div>
	  </div>
	  <div class="col-md-9">
	  	  <h3 align="center">Yönlendirilen Yol Sorunları </h3>


  <?php
	
			$sql="select* from `bildirim` order by id desc";
			$sonuc=$baglanti->query($sql);
			$durum;	
			while($kayit=$sonuc->fetch_assoc())
			{
				
				if($kayit['sehir']!=""&&$_SESSION['rol']==$kayit['sehir']&&$kayit['durum']!="Çözüldü"&&$_SESSION['rol']!="9.Bölge Müdürlüğü")
				{
					$durum=$kayit['sehir'];
	  ?>
	  
	  <div class="card acilis">
			  <div class="card-header cr"  align="center"  style="font-weight:bold">
    <?php  echo $kayit['sehir'];?>
  </div>

  <div class="card-body">
    <p class="card-text"><span style="font-weight:bold">Bildirim:</span>  <?php echo $kayit['yol_sorunu'];?></p>
	    <p class="card-text"><span style="font-weight:bold">Tarih/Saat:</span>  <?php echo $kayit['tarih'];?></p>

	 <form method="POST">
	   			<input type="hidden" name="gizli1" value="<?php echo $kayit['id'];?>">

	
	  	<input type="submit" class="btn btn-success btn1" name="cozuldu" value="Çözüldüğünü Onayla">

</form>
  </div>
</div>
<?php
				}
				else if($kayit['sehir']!=""&&$_SESSION['rol']=="9.Bölge Müdürlüğü"&&$kayit['durum']!="Çözüldü")
				{
					?>
					  <div class="card acilis">
			  <div class="card-header cr"  align="center">
			<span align="right">&#10071;</span>
			   <span>Yönlendirilen Şube-----> <span style="font-weight:bold"><?php echo $kayit['sehir'];?></span</span>
		     </div>
		  <div class="card-body">
			<p class="card-text"><span style="font-weight:bold">Bildirim:</span>  <?php echo $kayit['yol_sorunu'];?></p>
			
				<p class="card-text"><span style="font-weight:bold">Tarih|Saat:</span>  <?php echo $kayit['tarih'];?></p>

		 <form method="POST">
   			<input type="hidden" name="gizli1" value="<?php echo $kayit['id'];?>">

	  <select class="form-control" name="sehirler"  style="background-color:#ECEFF1">
       	<option>9.Bölge Müdürlüğü</option>
        <option selected>91.Şube Şefliği Şanlıurfa</option>
        <option>92.Şube Şefliği Merkez</option>
		<option>93.Şube Şefliği Mardin</option>
        <option>94.Şube Şefliği Siirt</option>
        <option>95.Şube Şefliği Cizre</option>
        <option>96.Şube Şefliği Siverek</option>
		<option>97.Şube Şefliği Batman</option>
      </select>
	  <br>
	    		
	    		<center><input type="submit" class="btn btn-outline-primary btn1"  name="yonlendir" id="myBtn" value="&#9194; Yeniden Yönlendir" >

	  	  	<input type="submit" class="btn btn-outline-success btn1" name="cozuldu"  value="&#9989; Çözüldüğünü Onayla"></center>

</form> 					
 </div>

</div>
<br>
	<?php
				}
			}
			?>

	  </div>
      </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>