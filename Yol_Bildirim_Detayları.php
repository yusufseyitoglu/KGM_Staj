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
	
	if(isset($_POST['engelleme']))
	{
		$sql="UPDATE `bildirim` SET `engel` = '1' WHERE `bildirim`.`id` = '".$_POST['ttm']."';";
		
		$baglanti->query($sql);
	}
	
	if(isset($_POST['noengelleme']))
	{
				$sql="UPDATE `bildirim` SET `engel` = '0' WHERE `bildirim`.`id` = '".$_POST['ttm']."';";
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

		
			
		table { 
		  width: 100%; 
		  border-collapse: collapse; 
		}
		tr:nth-of-type(odd) { 
		  background: #eee; 
		}
		th { 
		  background: #333; 
		  color: white; 
		  font-weight: bold; 
		}
		td, th { 
		  padding: 6px; 
		  border: 1px solid #ccc; 
		  text-align: left; 
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
			
			tr { border: 1px solid #ccc;  }
			
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
			
		  
			td:nth-of-type(1):before { font-weight:bold;content: "AD :"; }
			td:nth-of-type(2):before { font-weight:bold;content: "SOYAD :"; }
			td:nth-of-type(3):before { font-weight:bold;content: "TC No :"; }
			td:nth-of-type(4):before { font-weight:bold;content: "TEL_NO :"; }
			td:nth-of-type(5):before { font-weight:bold;content: "ŞEHİR :"; }
			td:nth-of-type(6):before { font-weight:bold;content: "YOL DURUMU :"; }
			td:nth-of-type(7):before { font-weight:bold;content: "Tarih|Saat :"; }   
			td:nth-of-type(8):before {font-weight:bold; content: "DURUM :"; }
		  
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
          <a class="nav-link" href="Yetkili_Giris.php"style="top-width:10%;color:black;font-family:Didot;text-decoration-line: underline">&#10148;<strong> Yetkili Giriş</strong></a>
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
<br><br>
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
            </p>
			<hr>
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
			&#8987; Güncel Yol Sorunları  <span class="badge badge-primary">
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
		  </span>
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
				&#127344; <strong>Yol Bildirim Detayları</strong>
            </a>
          </li>
          <?php
				if($_SESSION['rol']=="9.Bölge Müdürlüğü")
				{
		  ?>
          <li class="nav-item">
            <a class="nav-link" href="Yetkili_Kullanici_İslemleri.php" style="font-family:Times New Roman">
             &#9989;   Yetkili Kullanıcı İşlemleri
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
	   <br><br>


	  <div class="col-md-9 tablo">
	      <form class="form-inline my-2 my-lg-0" method="POST">
   <div class="input-group mb-3" style="width:100%">
  <input type="search" aria-label="Search" class="form-control" placeholder="TC Kimlik No İle Arama Yap......." name="arama">
  <div class="input-group-append">
 <button class="btn btn-outline-success my-2 my-sm-0" name="aramayap"  type="submit"> &#10067;</button>  </div>
</div>
    </form>
	  <h3 align="center">Yol Bildirim Detayları</h3>
	 

	  <table class="table table-striped table-bordered" style="width:100%">

  <thead>
  
    <tr>
      <th scope="col">AD</th>
      <th scope="col">SOYAD</th>
      <th scope="col">TC No</th>
      <th scope="col">TEL_NO</th>
      <th scope="col">ŞEHİR</th>
      <th scope="col">YOL DURUMU</th>
	  <th scope="col">Tarih/Saat</th>
	  <th scope="col">İP ADRESİ</th>
	  <th scope="col">ENGEL</th>
      <th scope="col">DURUM</th>

    </tr>
  </thead>
  <tbody>
   <?php
   
			$sayfa=@$_GET['s'];
			if(empty($sayfa)||!is_numeric($sayfa))
			{
						$sayfa=1;
			}
			$kacar=10;
			$sql1="select* from `bildirim`";
			$sonucu=$baglanti->query($sql1);
			$t=0;
			while($kayitı=$sonucu->fetch_assoc())
			{
				$t++;	
			}
	  
			$sayfasayisi=ceil($t/$kacar);
			$nereden=($sayfa*$kacar)-$kacar;
			
			if(!isset($_POST['aramayap']))
			{
				if($_SESSION['rol']=="9.Bölge Müdürlüğü")
				{
				$sql="select* from `bildirim` order by id desc limit $nereden,$kacar";
				}
				else
				{
					$sql="select* from `bildirim` where sehir='".$_SESSION['rol']."'  order by id desc limit $nereden,$kacar";

				}
			}
			if(isset($_POST['aramayap']))
			{
				if($_SESSION['rol']=="9.Bölge Müdürlüğü")
				{
				$sql="SELECT* FROM `bildirim`  WHERE tckn LIKE '%".$_POST['arama']."%'";
				echo 	"<span style='font-weight:bold;color:blue'>'".$_POST['arama']."'</span> ile ilgili kayıtlar görüntüleniyor.Tüm kayıtları görüntülemek için sadece arama butonuna basınız..";
				
				}
				
				else
				{
					$sql="SELECT* FROM `bildirim`  WHERE sehir='".$_SESSION['rol']."' and tckn LIKE '%".$_POST['arama']."%'";
				echo 	"<span style='font-weight:bold;color:blue'>'".$_POST['arama']."'</span> ile ilgili kayıtlar görüntüleniyor.Tüm kayıtları görüntülemek için sadece arama butonuna basınız..";
				
				}
			
			}
	  $sonuc=$baglanti->query($sql);
	  while($kayit=$sonuc->fetch_assoc())
			{
	  ?>
			<tr>
			  <td><?php echo $kayit['ad'];?></td>
			  <td><?php echo $kayit['soyad'];?></td>
			  <td><?php echo $kayit['tckn'];?></td>
			  <td><?php echo $kayit['tel_no'];?></td>
			  <td><?php echo $kayit['sehir'];?></td>
			  <td><?php echo $kayit['yol_sorunu'];?></td>
			  <td><?php echo $kayit['tarih'];?></td>
			  <td><?php echo $kayit['ip'];?></td>
			  <td>
			  <form method="POST"><br>
			  <input type="hidden" name="ttm" value="<?php echo $kayit['id'];?>">
				<?php if($kayit['engel']=="0")echo "<input type='submit' style='font-weight:bold;font-family:Times New Roman' name='engelleme' value='    Engelle    ' class='btn btn-danger'>";?>
				<?php if($kayit['engel']=="1")echo "<input type='submit' style='font-weight:bold;font-family:Times New Roman'   name='noengelleme'value='Engeli Kaldır' class='btn btn-success'>";?>
			  </form>
			  </td>

			  <td><?php echo $kayit['durum'];?></td>
			</tr>
    			
<?php
			}
			
			for($i=1;$i<=$sayfasayisi;$i++)
			{
				?>
	
				<ul class="pagination">
					<li class="page-item">
				
					<a class="page-link" href="Yol_Bildirim_Detayları.php?s=<?php echo $i;?>"><?php echo $i;?></a>
				</li>
				
		   
	
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