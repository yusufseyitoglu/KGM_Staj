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
		 
		   0%   {left:0px; top:150px;}
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
		  <?php
				if($_SESSION['rol']=="9.Bölge Müdürlüğü")
				{
		  ?>
          <li class="nav-item">
            <a class="nav-link" href="Yetkili_Sayfası.php"  style="font-family:Times New Roman">
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
				}
				else
				{
					
		  ?>
		   <li class="nav-item">
            <a class="nav-link" href="Yetkili_Sayfası.php"  style="font-family:Times New Roman">
			&#8987; <strong>Güncel Yol Sorunları  <span class="badge badge-primary">
			<?php
				$sql="select* from `bildirim`";
				$sonuc=$baglanti->query($sql);
				$sayi=0;
					while($kayit=$sonuc->fetch_assoc())
					{
						if(($kayit['durum']!="Çözüldü"&&$kayit['sehir']==$_SESSION['rol'])||($kayit['durum']!="Çözüldü"&&$_SESSION['rol']=="9.Bölge Müdürlüğü"))
						{
							
							$sayi++;
							
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
		 
		 <?php
				if($_SESSION['rol']=="9.Bölge Müdürlüğü")
				{
		  ?>
		  <li class="nav-item">
            <a class="nav-link" href="Yonlendirilen_Sorunlar.php"  style="font-family:Times New Roman">
			&#9208; <span>Yönlendirilen Sorunlar  <span class="badge badge-primary">
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
		  </span></span>
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
             &#10068; <strong>Paneli Nasıl Kullanırım?</strong>
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
	  <strong style="text-decoration:underline">Güncel Yol Sorunları</strong><br>
								Bildirilen yol sorunları öncelikle bu sayfada görüntülenir. 9.Bölge Müdürlüğünün yol sorununu ilgili şubeyi seçip "Yönlendir" butonu ile yönlendirmesi gerekmektedir.9.Bölge Müdürlüğü sorunu ilgili Şubeye yönlendirdikten sonra sorun bu sayfadan otomatik olarak kaldırılır.İlgili Şube'nin Güncel Yol Sorunları sayfasına gönderilir.9.Bölge için bu sorun Yönlendirilen Sorunlar sayfasına gelir.
								<br>								<br>

								
								
								<strong style="text-decoration:underline">Yönlendirilen Sorunlar</strong><br>
								Bu sayfada sadece 9.Bölge Müdürlüğü tarafından görüntülenebilir.Şubelere yönlendirilmiş ancak çözülmemiş yol sorunları burada görüntülenir.Bölge isterse "Çözüldüğünü Onayla" butonu ile bu soruna çözüldü onayı verebilir.(Çözüldü onayı verilince sorun tüm şubelerin anasayfasından otomatik olarak kaldırılır.) ya da "Yeniden Yönlendir" butonu ile yol sorununu başka bir şubeye yönlendirebilir.	
<br>								<br>

								<strong style="text-decoration:underline">Yol Bildirim Detayları</strong><br>
Yol problemi bildiren kişilerin bilgileri görüntülenir.Bölge tamamını,Şubeler ise sadece kendilerine yönlendirilen problemi ileten kişin bilgisini görebilirler.	

<br>								<br>

								<strong style="text-decoration:underline">Yetkili Kullanıcı İşlemleri</strong><br>
Sisteme yeni kullanıcı ekleme sayfasıdır.Sadece Bölge tarafındak kullanılabilir.

<br>								<br>

								<strong style="text-decoration:underline">Geçmiş Kayıtlar</strong><br>
Tamamamen Çözülen problemler bu sayfaya taşınır.Buraya taşınan yol sorunları "çözüldü" onayı aldığı için herhangi bir işlem yapmaya gerek yoktur.Yol sorunları istenirse "Revize Et" butonu ile tekrar güncel sorunlar(şubeler için) ya da Yönlendirilen Sorunlar(Bölge) sayfalarına taşınıp değerlendirilebilir.Bölge tüm sorunları,şubeler ise kendilerinin çözdükleri sorunları görüntüleyebilirler.Burada Backup Al butonu ile kayıtları yedekleyebilirsiniz.Ancak bu buton aynı zamanda şuana kadar olan kayıtları Geçmiş Kayıtlar sayfasınladn kaldır.Bu kayıtlar backup olarak sadece Yedek Kayıtlar sayfasından ulaşılabilir.					

		<br><br><strong>ÖNEMLİ NOT:  9.BÖLGE MÜDÜRLÜĞÜ YETKİLİSİ TARAFINDAN GEÇMİŞ KAYITLAR SAYFASI HER AYIN 25. GÜNÜ MUTLAKA AÇILOMALIDIR.AKSİ TAKDİRDE BACKUP İŞLEMİ GERÇEKLEŞMEZ!!</strong>	
			

	  </div>
      </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>