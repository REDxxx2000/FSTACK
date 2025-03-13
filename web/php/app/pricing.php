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
<head>
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

    <link href="../../css/index.css" rel="stylesheet">
    <script src="../../js/pricing.js"></script>
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
<body onload="loader();" onscroll="skrrols();">
  <div id="backG" style="opacity:0;display: none;"></div>
  
  <nav id="navG" style="opacity:0;display: none;" class="navbar navbar-expand-lg navbar-white bg-white fixed-top">
    <div class="container-fluid">
      <a id="init" class="navbar-brand" href="indexx.php">INIT
      <img id="initts" src="/web/images/logo.png" alt="logo">
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
  <section  id="hero-0" style="opacity:0;display: none;" class="container">
     
    <div class="row align-items-start">
        <div class="col">
            
              <div class="carousel-item active">
                <a href="free.php">
                <img id="imgCart" src="/web/images/cleen6.jpg"  alt="...">
                <div class="carousel-caption ">
                  <h2>F R E E</h2>
                  <h1>0$ USD</h1>
                </div>
                </a>
              </div>
          
            
        </div>

        <div class="col">
          
            <div class="carousel-item active">
              <a href="pro.php">
              <img id="imgCart" src="/web/images/5.jpg"  alt="...">
              <div class="carousel-caption ">
                <h2>P R O</h2>
                <h1>19$ USD</h1>
              </div>
              </a>
            </div>

      </div>
        
</div>
    
</section>
  <center>
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