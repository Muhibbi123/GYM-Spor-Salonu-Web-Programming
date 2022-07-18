<!DOCTYPE html>
<html>
<head>
<!-- üye girişi -->

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="icon" href="dumbell.ico"type="image/x-icon"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">    
    
<style>
    body { /*arka plan*/
        background-image: url("UyeGirisi.jpg");
        margin:0;
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
    h1{
        text-align: center;
        color: orange;
        font-family: monospace;
        font-size: 65px;
    }
    form{
        text-align: center;
        font-size: 30px;
        color:white;
    }
    
    button{
        padding:5px 15px; 
        background:lightblue; 
        border:0;
        border-radius: 5px; 
        color: maroon;
    }
    
    p{
        color: orange;
    }
</style>

<meta charset="utf-8">
</head>
<body>

<title>ERTOK Spor Salonu Üye Giriş</title>
    
<ul>
    <li><a href="anaSayfa.html">Ana Sayfa</a></li> 
    <li><a href="YeniUye.php">Yeni Üyelik Oluşturma</a></li>
    <li><a href="hocalarimiz.html">Hocalarımız</a></li>
    <li style="float: right"><img src = "ERTOK%20SPOR%20SALONU%20LOGOSU.png" width="220" length="130"></li>
    <li style="float: right"><a href="https://tr-tr.facebook.com/mert.ertok" target="_blank"><img src="facebook%20logo.png" width="15" height="15"></a></li>
    <li style="float: right"><a href="https://www.instagram.com/mertertok/" target="_blank"><img src="insta%20logo.png" width="15" height="15"></a></li>
</ul>
<br><br><br>
<h1>-Ertok Spor Salonu Üye Giriş Ekranı-</h1>

<form action="giris.php" method="post"> <!-- burayı veri tabanına bağlayacağız. Yeni üyelik açacak.-->

    <label for="nickname" style="color: orangered">Kullanıcı Adınız:</label><br>
    <input type="text" id="nickname" name="nickname">
    
    <br>
    <br>
    
    <label for="passwd" style="color: orangered">Şifreniz: (Şifrenizi görmek için Göz'e basınız.)</label><br>
    <input type="password" id="password" name="passwd">
    <i class= "far fa-eye" id="togglePassword"></i>
    
    <br>
    <button>Giriş</button>
    
    <p style="font-weight: 700">Bu siteye sadece üyelerimiz giriş yapabilir. Üyeliğiniz yok mu? Hiç sorun değil! <i><a href="YeniUye.php" style="color:magenta">Buradan üye olabilirsiniz.</a></i>
    </p>
</form>
    
<script src="app.js"></script>    
    
<br><br><br><br><br><br><br><br><br><br><br><br><br>
<h3 style= "text-align: center; font-size: 15px; color: white;"><img src = "ERTOK%20SPOR%20SALONU%20LOGOSU.png" width="130" length="70">ERTOK SPOR SALONU®. TÜM HAKLARI SAKLIDIR.</h3>

</body>
</html>