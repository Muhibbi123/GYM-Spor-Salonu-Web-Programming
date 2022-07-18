<!DOCTYPE html>
<html>
<head>

<!-- YENİ ÜYE GİRİŞİ -->     
    
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="icon" href="dumbell.ico"type="image/x-icon"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
        
<style>
    body { /*arka plan*/
        background-image: url("UyeKayit.jpg");
        margin:0;  /* navbarın tam oturması için */
    }
    
    ul { /*burası en üstteki butonların arka plan rengi*/
        list-style-type: none; /* bu üstte navbarın içindeki linklere a.) b.) gibi şeyler yazıyor (yazdırmadım) */
        margin: 0; /*sayfanın üst tarafla yaptığı boşluk */
        padding: 0;/*iç tarafta yazıların çerçeveyle yaptığı boşluk */
        overflow: hidden;
        background-color: darkred;
        position: fixed; /* navbarın sabit her yerde görülmesini sağlar */
        top: 0;
        width: 100%;
    }
    
    li { /*burası butonlar arası boşluk rengi*/
        float: left;
        border-right: 1px solid gray;
    }
    
    li:last-child { /*butonlar arası boşluklarla ilgili*/
        border-right: none; /*instagram logo ile facebook arası logoya ayrım koymasın diye*/
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
        color: red;
        font-style: italic;
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
</style>

<meta charset="utf-8">
</head>

<body>
<br><br><br>
<title>ERTOK Spor Salonu Üyelik Oluşturma</title>
    
<ul>
    <li><a href="anaSayfa.html">Ana Sayfa</a></li> 
    <li><a href="uyeGirisi.php">Üye Girişi</a></li>
    <li><a href="hocalarimiz.html">Hocalarımız</a></li>
    <li style="float: right"><img src = "ERTOK%20SPOR%20SALONU%20LOGOSU.png" width="220" length="130"></li>
    <li style="float: right"><a href="https://tr-tr.facebook.com/mert.ertok" target="_blank"><img src="facebook%20logo.png" width="15" height="15"></a></li>
    <li style="float: right"><a href="https://www.instagram.com/mertertok/" target="_blank"><img src="insta%20logo.png" width="15" height="15"></a></li>
</ul>

<h1>Hoşgeldiniz. Buradan "yeni üyelik" oluşturabilirsiniz.</h1>  

<form action="kayit.php" method="post"> <!-- burayı kayit.php bağladık. Ordan veri tabanına girdiklerimizi yolluyor.-->
    <label for="isim">Adınız:*</label><br>
    <input type="text" name="isim" placeholder="Adınız"> <!-- name e göre veritabanında alıyor-->
    
    <br>
    <label for="soyisim">Soyadınız:*</label><br>
    <input type="text" name="soyisim" placeholder="Soyadınız">
   
    <br>
    <label for="mail">Mail Adresiniz:*</label><br>
    <input type="text" name="mail" placeholder="ör: example55@gmail.com">

    <br>
    <label for="yas">Yaşınız:*</label><br>
    <input type="text" name="yas" placeholder="Yaşınız">
    <br>
    
    <br>
    <label for="nickname">Siteye giriş yaparken kullanacağınız kullanıcı adı:*</label><br>
    <input type="text" name="nickname" placeholder="ör: mert.ertok">
    
    <br>
    <br>
    <label for="passwd">Siteye giriş yaparken kullanacağınız şifreniz (Şifrenizi görmek için Göz'e basınız.):*</label><br>
    <input type="password" name="passwd" id="password" placeholder="ör: 12345">
    <i class= "far fa-eye" id="togglePassword"></i>
    
    <br>
    <br>
    <label>Cinsiyetiniz:*</label>
    <br>
    <label for="erk">Erkek:</label>
    <input type="radio" name="cins" value="ERK" checked><br>
    
    <label for="kad">Kadın:</label>
    <input type="radio" name="cins" value="KAD"><br>

    <br>
    
    <label for="information">Lütfen kendinizi geliştirmek istediğiniz alanı seçiniz.<br></label>
    <br>
  <select name="bolum" id="bolum" style="text-align: center; font-size: 30px; color:blue;">
    <option value="1">Fitness</option>
    <option value="2">BodyBuilding</option>
    <option value="3">Jimnastik</option>
    <option value="4">Karate</option>
    <option value="5">Taekwondo</option>
  </select> 
    <br>
    <br>
    <button>Üyelik Oluştur</button>
    
    <p style="font-weight: 700">İşleminizi tamamladığınızda, <font color="red"><u>"Üyelik Oluştur"</u></font> düğmesine basınız.<br>
    Siteye giriş yaparken, <i>KULLANICI ADINIZ</i> ve <i>ŞİFRENİZ</i> ile giriş yapmanız gerekiyor.(*, DOLDURULMASI ZORUNLU ALANLARI TEMSİL EDER.)
    </p>
    
    <h2 style= "text-align: center; font-size: 30px; color: magenta;">Zaten üye misiniz? O zaman <a href="uyeGirisi.php" style="color:yellow">Sayfamıza buradan giriş yapabilirsiniz...</a></h2>
</form>
    
<script src="app.js"></script>

<br>
<h3 style= "text-align: center; font-size: 15px; color: white;"><img src = "ERTOK%20SPOR%20SALONU%20LOGOSU.png" width="130" length="70">ERTOK SPOR SALONU®. TÜM HAKLARI SAKLIDIR.</h3>

</body>
</html>