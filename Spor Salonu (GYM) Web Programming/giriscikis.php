<!DOCTYPE html>
<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="icon" href="dumbell.ico"type="image/x-icon"/> <!-- sayfanın ikonu -->
<style>
    
body { /*arka plan*/
    background-image: url("GirisCikis.jpg");
    margin:0;
}

h1{/*En üst başlık rengi ve yazı tipi*/
    color:lightcoral; 
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
    <h3 style="text-align: center; color: white;">
    <?php
    session_start();
    if(isset($_SESSION['user'])){ //giriş yapıldığında bunları yaz
        echo "<br><br>";
        echo "Giriş yapıldı. Hoşgeldiniz, Sayın (".$_SESSION['user']['nickname'].")";
    }
    else{
        echo "<br><br>";
        echo "Çıkış yapıldı. Yine Bekleriz"; // çıkış yapıldığında yapılacaklar
        echo "<br><br>";
    }
  
?></h3>
        
        <h1 style="text-align: center; font-size: 60px; font-style: sans;"><img src = "ERTOK%20SPOR%20SALONU%20LOGOSU.png" width="220" length="130"><br><b>-ERTOK SPOR SALONU-<br>
        Kaliteli Yaşamın Adresi</b> </h1>
  
<title>ERTOK SPOR SALONU</title>


<ul>
    <li style="float: right"><img src = "ERTOK%20SPOR%20SALONU%20LOGOSU.png" width="220" length="130"></li>
    <li><a href="anaSayfa.html">Ana Sayfa</a></li> 
    <li><a href="cikis.php">Çıkış Yapma</a></li> 
    <li><a href="uyeGirisi.php">Giriş Yapma</a></li>
    <li style="float: right"><a href="https://tr-tr.facebook.com/mert.ertok" target="_blank"><img src="facebook%20logo.png" width="15" height="15"></a></li>
    <li style="float: right"><a href="https://www.instagram.com/mertertok/" target="_blank"><img src="insta%20logo.png" width="15" height="15"></a></li>
    
</ul>
    
    
</body>
</html>
