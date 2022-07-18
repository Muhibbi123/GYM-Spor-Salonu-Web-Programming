<!DOCTYPE html>
<html>
<head>
    
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="icon" href="dumbell.ico"type="image/x-icon"/> <!-- sayfanın ikonu -->
<style>
    
body { /*arka plan*/
    margin:0;
    background-image: url("Giris.jpg");
}

h1{/*En üst başlık rengi ve yazı tipi*/
    color:blue; 
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
    
<h1 style="text-align:center; font-size: 60px; color: red;">

<?php
session_start();
    
$db = new PDO("mysql:host=localhost;dbname=sportesisuyelik;charset=utf8","root","");

$kadi = $_POST['nickname'];
$sifre = $_POST['passwd'];

    if(!$kadi || !$sifre){
        die("Lütfen Boş Alan Bırakmayınız. Tekrar deneyin.");
    }

$user = $db->query("SELECT * FROM uyebilgisi WHERE nickname = '$kadi' AND passwd = '$sifre'")->fetch();

    if($user){
        $_SESSION['user'] = $user;
        header("location: giriscikis.php");
    }
    else{
        echo "Bilgileriniz Hatalı Girilmiş Olabilir. Lütfen Doğru Girdiğinizden Emin Olunuz.";
    }

?>
    
</h1>
    <h1 style="text-align: center; font-size: 60px; font-family: sans;"><img src = "ERTOK%20SPOR%20SALONU%20LOGOSU.png" width="220" length="130"><br><b>-ERTOK SPOR SALONU-<br>
        Kaliteli Yaşamın Adresi</b><br></h1>
    
    
    <title>ERTOK Kayıt Bölümü</title>




</body>
</html>