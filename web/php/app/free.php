<?php
session_start();
$pos = null;
$usr = null;
$age = null;
$mail = null;
$ctry = null;
$pass = null;
?>
<?php
if($_SESSION!=null&&$_COOKIE!=null){
  $pos = true;
  $nam = $_SESSION['txtNam'];
  $usr =$_SESSION['txtUsr'];
  $age =$_SESSION['txtAge'];
  $mail =$_SESSION['txtMail'];
  $ctry =$_SESSION['txtCtry'];
  $pass =$_SESSION['txtPass'];
 

}else{}
if($_POST!=null){
  $pos = true;
  $nam = $_POST['txtNam'];
  $usr =$_POST['txtUsr'];
  $age =$_POST['txtAge'];
  $mail =$_POST['txtMail'];
  $ctry =$_POST['txtCtry'];
  $pass =$_POST['txtPass'];

  $_SESSION['txtNam']=$nam ;
  $_SESSION['txtUsr']=$usr ;
  $_SESSION['txtAge']=$age ;
  $_SESSION['txtMail']=$mail ;
  $_SESSION['txtCtry']=$ctry ;
  $_SESSION['txtPass']=$pass ;

  $_COOKIE['txtNam']=$nam ;
  $_COOKIE['txtUsr']=$usr ;
  $_COOKIE['txtAge']=$age ;
  $_COOKIE['txtMail']=$mail ;
  $_COOKIE['txtCtry']=$ctry ;
  $_COOKIE['txtPass']=$pass ;
  

}else{}
?>
<!DOCTYPE html>
<html lang="en"
ondrag="return false;"
ondragend="return false;"
ondragenter="return false;"
ondragleave="return false;"
ondragover="return false;"
ondragstart="return false;"
>
<head >
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INIT</title>
      <!-- Bootstrap CSS -->
    <link href="/web/css/bootstrap.min.css" rel="stylesheet">
    <!-- jQuery -->
    <script src="/web/js/jQuery-3.7.1.min.js"></script>
    <!-- Bootstrap JS (opcional, solo si necesitas componentes interactivos) -->
    <script src="/web/js/bootstrap.bundle.js"></script>
        
        
    <link rel="preload"    as="font"    type="font/woff2"    href="/fonts/roboto-v47-latin-200.woff2"    crossorigin  />
    <link rel="preload"    as="font"    type="font/woff2"    href="/fonts/roboto-v47-latin-900.woff2"    crossorigin  />
    <link rel="preload"    as="font"    type="font/woff2"    href="/fonts/roboto-v47-latin-regular.woff2"    crossorigin  />

    <link rel="preload"    as="font"    type="font/woff2"    href="/fonts/oswald-v53-latin-200.woff2"    crossorigin  />
    <link rel="preload"    as="font"    type="font/woff2"    href="/fonts/oswald-v53-latin-700.woff2"    crossorigin  />
    <link rel="preload"    as="font"    type="font/woff2"    href="/fonts/oswald-v53-latin-regular.woff2"    crossorigin  />

    <link rel="preload"    as="font"    type="font/woff2"    href="/fonts/ubuntu-v20-latin-300.woff2"    crossorigin  />
    <link rel="preload"    as="font"    type="font/woff2"    href="/fonts/ubuntu-v20-latin-700.woff2"    crossorigin  />
    <link rel="preload"    as="font"    type="font/woff2"    href="/fonts/ubuntu-v20-latin-regular.woff2"    crossorigin  />
    <!-- Iconos locales -->
    <link href="/web/images/favicon.png" rel="shortcut icon" type="image/x-icon"/>
    <link href="/web/images/favicon.png" rel="apple-touch-icon"/>

    <link href="/web/css/index.css" rel="stylesheet">
    <script src="/web/js/main.js"></script>
    <style>
      #pricin::after{
      background-color: rgb(238, 255, 0);
    }#pricin:hover{
    color: rgb(238, 255, 0);
    }#contact::after{
      background-color: rgb(0, 255, 13);
    }#contact:hover{
      color: rgb(0, 255, 13);
    }#txtUsr::after{
      background-color: rgb(255, 255, 255);
      opacity: 0;
    }#txtUsr{
      font-family: Roboto, serif;
          font-weight: 300;
          font-size: 1.2rem;
    }
    </style>
   
</head>
<body onload="loader();" onscroll="skrrol();">
  <div id="backG" style="opacity:0;"></div>
  
  <nav id="navG" style="opacity:0;" class="navbar navbar-expand-lg navbar-white bg-white fixed-top">
    <div class="container-fluid">
      <a id="init" class="navbar-brand" href="indexx.php">INIT
      <img id="initts" src="/web//images/logo.png" alt="logo">
      </a>
      <center><button id="menu" class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button></center>
      <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a id="pricin" class="nav-link" href="pricing.php">PRICING</a>
          </li>
          <li class="nav-item">
            <a id="contact" class="nav-link" href="contact.php">CONTACT</a>
          </li>
          <li class="nav-item">
          <a id="Usr" class="nav-link" href="usr.php">
          <center>
          <?php if($pos){echo "<div id='txtUsr' style='border-radius:20px;position: absolute;right: 27%;top: 32%;' class='nav-link'>$usr</div>";}else{}?>  
          <img id="imgUsr" onmouseenter="" src="../../images/usr.jpg" alt="logo" height="80px" 
          style="
          border-radius:20px;
          position: absolute;
          right: 18%;
          top: 2%;
          
          "
          >
          </center>
          </a>
          </li>
        </ul>
      </div>
      
    </div>
  </nav>
  <br><br><br><br><br><br>
  <section id="heroG0" style="opacity:0;"   class="hero-section ">
    <div id="heroG" class="container" name="hero0">
      <h1>SUB SYSTEM</h1>
      <?php if($pos){echo "<h2>FREE TRIAL $nam </h2>";}else{} ?>
      
      <p><h6><hr>Founded by a team of visionary architects, dev-engineers, and builders, we specialize in combining cutting-edge software with state-of-the-art construction practices to deliver innovative, efficient, and sustainable solutions.</p></h6><hr>
         <a  class="btn" onclick="alert('free');" downlad>TRY NOW</a>
    </div>
    
    
  </section>
  <br><br><br><br><br><br><br>
  
  <center><br><br><br><br><br><br>
  <section id="heroG1" style="opacity:0;"    class="hero-section">
    <div id="hero" class="container" name="hero1">
      
        <div id="carouselExampleCaptions" class="carousel slide">
            
            <div class="carousel-inner">
              <div class="carousel-item active">
                <a href="nem.php">
                <img id="imgCar" src="/web/images/mine1.jpg"  alt="...">
                <div class="carousel-caption ">
                  <h2>I M G 01</h2>
                  <p>Get BTC and ETH</p>
                </div>
                </a>
              </div>
              <div class="carousel-item ">
                <a href="cleen.php">
                <img id="imgCar" src="/web/images/cleen6.jpg"  alt="...">
                <div class="carousel-caption ">
                  <h2>I M G 02</h2>
                  <p>Optimize your device</p>
                </div>
                </a>
              </div>
              <div class="carousel-item ">
                <a href="ecur.php">
                <img id="imgCar" src="/web/images/ecur3.jpg"  alt="...">
                <div class="carousel-caption ">
                  <h2>I M G 03</h2>
                  <p>Protection in & offline</p>
                </div>
                </a>
              </div>
              <div class="carousel-item ">
                <a href="normac.php">
                <img id="imgCar" src="/web/images/normac4.jpg"  alt="...">
                <div class="carousel-caption ">
                  <h2>I M G 04</h2>
                  <p>Absorve construction regulations</p>
                </div>
                </a>
              </div>
              
            </div>
            <!-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button> -->
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
            </div>
          </div>
    </div>
   
  </section>
  <br><br><br><br><br><br><br>

  <div id="preloader" class="honeycomb">
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
  </div></center>


</body>
</html>