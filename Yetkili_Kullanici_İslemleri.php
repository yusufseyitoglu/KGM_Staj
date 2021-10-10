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
	
	if(isset($_POST['ekle']))
	{
		
		$sql="INSERT INTO `yetkili` (`id`, `kullanici_adi`, `sifre`,`rol`) VALUES (NULL, '".$_POST['kullanici_adi']."', '".md5($_POST['sifre'])."','".$_POST['rol']."');";
		$baglanti->query($sql);
	}
	
	    if(isset($_POST['sil']))
		{
			

			$sqlquery="DELETE FROM `yetkili` WHERE id='".$_POST['tutmac']."'";
			$baglanti->query($sqlquery);
			
		}
		
		if(isset($_POST['guncelle']))
	{
		
		$sql="UPDATE `yetkili` SET `kullanici_adi` = '".$_POST['kullanici_adi']."', `sifre` = '".md5($_POST['sifre'])."', `rol` = '".$_POST['rol']."' WHERE `yetkili`.`id` = '".$_POST['tutmac3']."';";
		$baglanti->query($sql);
	}
		
		if(isset($_POST['iptal']))
		{
			
		 header("Location:Yetkili_Kullanici_İslemleri.php");
		 die();
		}
  ?>
		<style>
		
			th
		{
			background-color:#263238;
			color:white;
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

		
		@media 
		only screen and (max-width: 760px),
		(min-device-width: 768px) and (max-device-width: 1024px)  {


		.panell
		{
			font-size:20px;
		}
	 
		table, thead, tbody, th, td, tr { 
			display: block; 
		}
		
		
		thead tr { 
			position: absolute;
			top: -9999px;
			left: -9999px;
		}
		
		tr { border: 1px solid #ccc; }
		
		td { 
		   
			border: none;
			border-bottom: 1px solid #eee; 
			position: relative;
			padding-left: 50%; 
		}
		
		td:before { 
		   
			top: 6px;
			left: 6px;
			width: 45%; 
			padding-right: 10px; 
			white-space: nowrap;
		}
		
	   
		td:nth-of-type(1):before { font-weight:bold;content: "KULLANICI ADI:"; }
		td:nth-of-type(2):before { font-weight:bold;content: "ŞİFRE:"; }
		td:nth-of-type(3):before { font-weight:bold;content: "ŞUBE:"; }
		td:nth-of-type(4):before { font-weight:bold;content: "İŞLEM YAP:"; }
	   
	  
	}
			
	.navs
	{
		background: linear-gradient(to bottom,#F29221 0%,	#FFE0B2	 100%)

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


<br><br>
<br>
<br>
<br>

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
		<nav class="d-md-block" style="background-color:#E8EAF6">
      <div class="sidebar-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <p class="nav-link active" href="#" style="font-weight:bold;font-family:Times New Roman;font-size:17.7px">
KULLANIM PANELİ <span class="sr-only">(current)</span>
            </p>			<hr>

          </li>
          <li class="nav-item">
            <a class="nav-link" href="Yetkili_Sayfası.php"  style="font-family:Times New Roman">
                                       &#8987;
Güncel Yol Sorunları  <span class="badge badge-primary">
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
            &#9989; <strong>Yetkili Kullanıcı İşlemleri</strong>
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
		  
		  
		  <li class="nav-item">
            <a class="nav-link" href="Yedek_Kayitlar.php"  style="font-family:Times New Roman">
             &#127760; Yedek Kayıtlar
            </a>
          </li>
		  
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
	  
	    


<?php
	if(!isset($_POST['duzenle']))
	{
?>
		<div class="container">
	<div class="row">
			<div class="col-md-2">
</div>
		<div class="col-md-8">
		<form class="form-signin" method="POST">
  <center><img class="mb-4" src="image/Kgm_logo.png" alt="" width="100" height="100"></center>
		  <center><h1 class="h3 mb-3" style="font-weight:bold">Yetkili Kullanıcı İşlemleri</h1><center>
		  <input type="text" class="form-control" placeholder="Kullanıcı Adı" required="" autofocus="" name="kullanici_adi"><br>
		  <input type="text" class="form-control" placeholder="Şifre" required="" name="sifre"><br>
		  <select class="form-control" name="rol">
			<option>9.Bölge Müdürlüğü</option>
			<option>91.Şube Şefliği Şanlıurfa</option>
			<option>92.Şube Şefliği Merkez</option>
			<option>93.Şube Şefliği Mardin</option>
			<option>94.Şube Şefliği Siirt</option>
			<option>95.Şube Şefliği Cizre</option>
			<option>96.Şube Şefliği Siverek</option>
			<option>97.Şube Şefliği Batman</option>
		  </select>
		  <br>
		 <button class="btn btn-lg btn-primary btn-block" type="submit" name="ekle">Kullanıcıyı Ekle</button>
		</form>
		</div>
			<div class="col-md-2">
</div>
	</div>
</div>
<?php
	}
	
	else
	{
		
				$sql="SELECT* FROM `yetkili` WHERE id='".$_POST['tutmac']."';";
				$sonuc=$baglanti->query($sql);
				$kayit=$sonuc->fetch_assoc();
				
?>

<div class="container">
	<div class="row">
		<div class="col-md-2">
		</div>
		<div class="col-md-8">
		<form class="form-signin" method="POST">
		  <center><img class="mb-4" src="image/Kgm_logo.png" alt="" width="100" height="100"></center>
		  <center><h1 class="h3 mb-3" style="font-weight:bold">Yetkili Kullanıcı İşlemleri</h1><center>
		  <input type="text" class="form-control" placeholder="Kullanıcı Adı" required="" autofocus="" name="kullanici_adi" value="<?php echo $kayit['kullanici_adi'];?>"><br>
		  <input type="text" class="form-control" placeholder="Şifre" required="" name="sifre" value="<?php echo $kayit['sifre'];?>"><br>
				<select class="form-control" name="rol">
				<option value="9.Bölge Müdürlüğü" <?php if($kayit['rol']=="9.Bölge Müdürlüğü"){ echo "Selected";}?>>9.Bölge Müdürlüğü</option>
			    <option value="91.Şube Şefliği Şanlıurfa" <?php if($kayit['rol']=="91.Şube Şefliği Şanlıurfa"){ echo "Selected";}?>>91.Şube Şefliği Şanlıurfa</option>
				<option value="92.Şube Şefliği Merkez" <?php if($kayit['rol']=="92.Şube Şefliği Merkez"){ echo "Selected";}?>>92.Şube Şefliği Merkez</option>
				<option value="93.Şube Şefliği Mardin" <?php if(($kayit['rol']=="93.Şube Şefliği Mardin")){ echo "Selected";}?>>93.Şube Şefliği Mardin</option>
				<option value="94.Şube Şefliği Siirt" <?php if(($kayit['rol']=="94.Şube Şefliği Siirt")){ echo "Selected";}?>>94.Şube Şefliği Siirt</option>
				<option value="95.Şube Şefliği Cizre" <?php if(($kayit['rol']=="95.Şube Şefliği Cizre")){ echo "Selected";}?>>95.Şube Şefliği Cizre</option>
				<option value="96.Şube Şefliği Siverek" <?php if(($kayit['rol']=="96.Şube Şefliği Siverek")){ echo "Selected";}?>>96.Şube Şefliği Siverek</option>
				<option value="97.Şube Şefliği Batman" <?php if(($kayit['rol']=="97.Şube Şefliği Batman")){ echo "Selected";}?>>97.Şube Şefliği Batman</option>

		  </select><br>
		  <form method="POST">
		 <input type="hidden" name="tutmac3"  value="<?php echo $kayit['id']; ?>">
  		 <input class="btn btn-lg btn-primary btn-block" type="submit" name="guncelle" value="Kullanıcıyı Güncelle">
		 <input class="btn btn-lg btn-warning btn-block" type="submit" name="iptal" value="İptal">
		 </form>

		</form>
		</div>
		
		<div class="col-md-2">
		</div>
	</div>
</div>

<?php
	}
?>
	  <br>
<br><br>
<br>
	  <table class="table table-striped table-bordered">
  <thead>
    <tr>
     
      <th scope="col">KULLANICI ADI</th>
      <th scope="col">ŞİFRE</th>
      <th scope="col">ŞUBE</th> 
      <th scope="col">İŞLEM YAP</th>
    
	  
    </tr>
  </thead>
  <tbody>
   <?php
	  
	  $sql="SELECT* FROM `yetkili`";
	  $sonuc=$baglanti->query($sql);
	  while($kayit=$sonuc->fetch_assoc())
			{
	  ?>
			<tr>
			 
			  <td><?php echo $kayit['kullanici_adi'];?></td>
			  <td><?php echo $kayit['sifre'];?></td>
			  <td><?php echo $kayit['rol'];?></td>
			  
			  <form method="POST">
				<td>
						<input type="hidden" name="tutmac" value="<?=$kayit['id'];?>">
						<input type="submit" name="sil" value="SİL" class="btn btn-danger">
						<input type="submit" name="duzenle" value="DÜZENLE" class="btn btn-warning">
				</td>
			  </form>
			  
			</tr>
    			
<?php
	  }
?>
  </tbody>
</table>
  </div>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>