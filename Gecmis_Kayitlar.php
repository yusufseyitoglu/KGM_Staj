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
		  date_default_timezone_set('Europe/Istanbul');//türkiye saat dilimi
						if(isset($_POST['geri']))
						{
								$sql="UPDATE `bildirim` SET `durum` = ' ' WHERE `bildirim`.`id` = '".$_POST['gizli1']."';";
								$baglanti->query($sql);
						}
						     $bckup=false;				
							if($_SESSION['rol']=="9.Bölge Müdürlüğü")
							{
							 if(date("d")==25)
							 {
								$datee=date('d-m-y');
								$connection = mysqli_connect('localhost','root','','yol_durumu');
								$tables = array();
								$result = mysqli_query($connection,"SHOW TABLES");
								while($row = mysqli_fetch_row($result)){
								  $tables[] = $row[0];
								}
								$return = '';
								foreach($tables as $table){
								  $result = mysqli_query($connection,"SELECT * FROM ".$table);
								  $num_fields = mysqli_num_fields($result);
								  
								  $return .= 'DROP TABLE '.$table.';';
								  $row2 = mysqli_fetch_row(mysqli_query($connection,"SHOW CREATE TABLE ".$table));
								  $return .= "\n\n".$row2[1].";\n\n";
								  
								  for($i=0;$i<$num_fields;$i++){
									while($row = mysqli_fetch_row($result)){
									  $return .= "INSERT INTO ".$table." VALUES(";
									  for($j=0;$j<$num_fields;$j++){
										$row[$j] = addslashes($row[$j]);
										if(isset($row[$j])){ $return .= '"'.$row[$j].'"';}
										else{ $return .= '""';}
										if($j<$num_fields-1){ $return .= ',';}
									  }
									  $return .= ");\n";
									}
								  }
								  $return .= "\n\n\n";
								}
								$handle2 = fopen($datee.".sql","w+");
								fwrite($handle2,$return);
								fclose($handle2);
						
								 $sql="DELETE FROM bildirim";
								 $baglanti->query($sql);
								 
								 $bckup=true;	 
							 }
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
		@media screen and (max-width: 768px) {
		.panell
		{
			font-size:20px;
		}
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
		<div class="site">
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
		  date_default_timezone_set('Europe/Istanbul');//türkiye saat dilimi
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
<br>	<div class="row">
	<div class="col-lg-2 panell">
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
      <div class="sidebar-sticky pt-2">
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
             &#127344; Yol Bildirim Detayları
            </a>
          </li>
		  <?php
				if($_SESSION['rol']=="9.Bölge Müdürlüğü")
				{
		  ?>
          <li class="nav-item">
            <a class="nav-link" href="Yetkili_Kullanici_İslemleri.php">
            &#9989;  Yetkili Kullanıcı İşlemleri
            </a>
          </li>
		  <?php
				}
		  ?>
         <li class="nav-item">
            <a class="nav-link" href="Gecmis_Kayitlar.php">
           <strong> &#9201; Geçmiş Kayıtlar <span class="badge badge-primary">
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

		  </span></strong>
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
	   <form class="form-inline my-2 my-lg-0" method="POST">
   <div class="input-group mb-3" style="width:100%">
  <input type="date" aria-label="Search" class="form-control" placeholder="Bölge Araması Yap......." name="arama">

  <div class="input-group-append">
 <button class="btn btn-outline-success my-2 my-sm-0" name="aramayap"  type="submit"> &#10067;  </div>
  <a class="btn btn-outline-success my-2 my-sm-0" name="aramayap" href="Gecmis_Kayitlar.php"> &#127374;  </a>

</div>
    </form>
	  <h3 align="center">Geçmiş Kayıtlar </h3>
	  <?php
			if($bckup==true)
			{
				echo '<div class="alert alert-success" style="font-weight:bold;font-size:19px" align="center"  role="alert" style="font-weight:bold">
	  <span align="left">&#10004;</span>Yedek(Backup) Başarıyla Oluşturuldu.
	</div>';
			}
			
	  ?>
	  <?php
			
				if($_SESSION['rol']!="9.Bölge Müdürlüğü")
				{
					$sql="select* from `bildirim`  where durum='Çözüldü' and sehir='".$_SESSION['rol']."' order by id desc";		
				}
				else
				{
					$sql="select* from `bildirim`  where durum='Çözüldü' order by id desc";
				}
			
			if(isset($_POST['aramayap']))
			{
				if($_SESSION['rol']=="9.Bölge Müdürlüğü")
				{
						$sql="SELECT* FROM `bildirim`  WHERE durum='Çözüldü' and yil='".$_POST['arama']."' order by id desc";
						echo 	"<span style='font-weight:bold;color:blue'>'".$_POST['arama']."'</span>(yıl-ay-gün) ile ilgili kayıtlar görüntüleniyor.Tüm kayıtları görüntülemek için sağ üstteki AB butonuna basınız..";
						
				}
				
				else
				{
					$sql="SELECT* FROM `bildirim`  WHERE durum='Çözüldü' and sehir='".$_SESSION['rol']."' and yil LIKE '%".$_POST['arama']."%' order by id desc";
					echo 	"<span style='font-weight:bold;color:blue'>'".$_POST['arama']."'</span>(yıl-ay-gün) ile ilgili kayıtlar görüntüleniyor.Tüm kayıtları görüntülemek için sağ üstteki AB butonuna basınız..";
				
				}
			
			}
			$sonuc=$baglanti->query($sql);
			
			while($kayit=$sonuc->fetch_assoc())
			{
	?>		
			<div class="card acilis">
					  <div class="card-header cr"  align="center" style="font-weight:bold">
					&#9989; <?php  echo $kayit['sehir'];?>
				  </div>
				  <div class="card-body">
					<p class="card-text"><span style="font-weight:bold">Bildirim:</span>  <?php echo $kayit['yol_sorunu'];?></p>
					<p class="card-text"><span style="font-weight:bold">Tarih|Saat:</span>  <?php echo $kayit['tarih'];?></p>
				 <form method="POST">
					<input type="hidden" name="gizli1" value="<?php echo $kayit['id'];?>">
					<button type="submit" name="geri" class="btn btn-outline-info" style="font-weight:bold">&#9935;  Revize Et</button>

				</form>  
					</div>
			</div>
				<br>
					<nav aria-label="Page navigation example">

	<?php
			}
			
		   
	
	
	?>
	   		    </nav>

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