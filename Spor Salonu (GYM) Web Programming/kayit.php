<!DOCTYPE html>
<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="icon" href="dumbell.ico"type="image/x-icon"/> <!-- sayfanın ikonu -->
<style>
    
body { /*arka plan*/
    margin:0;
    background-image: url("Kayit.jpg");
}

h1{/*En üst başlık rengi ve yazı tipi*/
    color:lightsalmon; 
    font-family: monospace;
}
   
ul { /*burası en üstteki butonların arka plan rengi*/
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: darkred;
  position: fixed;
  top: 0;
  width: 100%;
}

li {    /*burası butonlar arası boşluk rengi*/
  float: left;
  border-right: 1px solid gray;
}
    
li:last-child { /*butonlar arası boşluklarla ilgili*/
  border-right: none;
}

li a {  /*butonların içindeki yazıların bilgileri*/
  display: block;
  color: peachpuff;
  text-align: center;
  padding: 15px 20px;
  text-decoration: none;
}

li a:hover{ /*mouse ile üstüne gelindiğinde oluşacak renk*/
  background-color: saddlebrown;
}

</style>
<meta charset="utf-8">
</head>
<body>
    <br><br><br>

<ul>
    <!--<li><a href="#salon">Spor Salonumuz Hakkında</a></li> -->
    <li style="float: right"><img src = "ERTOK%20SPOR%20SALONU%20LOGOSU.png" width="220" length="130"></li>
    <li><a href="anaSayfa.html">Ana Sayfa</a></li>  
    <li><a href="YeniUye.php">Yeni Üyelik Oluşturma</a></li>  
    <li><a href="uyeGirisi.php">Giriş Yapma</a></li>
    <li style="float: right"><a href="https://tr-tr.facebook.com/mert.ertok" target="_blank"><img src="facebook%20logo.png" width="15" height="15"></a></li>
    <li style="float: right"><a href="https://www.instagram.com/mertertok/" target="_blank"><img src="insta%20logo.png" width="15" height="15"></a></li>
    
</ul>
    
<h1 style="text-align:center; font-size: 60px;">
<?php

$db = new PDO("mysql:host=localhost;dbname=sportesisuyelik;charset=utf8","root","");
    
    $isim = $_POST['isim'];
    $soyisim = $_POST['soyisim'];
    $mail = $_POST['mail'];
    $yas = $_POST['yas'];
    $nickname = $_POST['nickname'];
    $passwd = $_POST['passwd'];
    $cins = $_POST['cins'];
    $bolum_id = $_POST['bolum'];
    
    if(!$isim || !$soyisim || !$mail || !$yas || !$nickname || !$passwd || !$cins){
        die("Lütfen boş alan bırakmayınız. Tekrar denemenizi öneririz.");
    }
    
    $ekle = $db->prepare("INSERT INTO uyebilgisi SET isim = ?, soyisim = ?, mail = ?, yas = ?, nickname = ?, passwd = ?, cins = ?, bolum_id = ?");
    $ekle->execute([$isim, $soyisim, $mail, $yas, $nickname, $passwd, $cins, $bolum_id]);

    if($ekle){
        echo "Kayıt olundu.";
    }
    else{
        echo "Hata oluştu.";
    }
    
?>
    </h1>
    <h1 style="text-align: center; font-size: 60px; font-family: sans;"><img src = "ERTOK%20SPOR%20SALONU%20LOGOSU.png" width="220" length="130"><br><b>-ERTOK SPOR SALONU-<br>
        Kaliteli Yaşamın Adresi</b><br><br>
    Sizleri aramızda görmek bizi çok mutlu etti.  </h1>
    
    
    <title>ERTOK Kayıt Olundu yazısı</title>




</body>
</html>