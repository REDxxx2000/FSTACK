<?php
session_start();
$pos = null;
$posMail = null;
$usr = null;
$age = null;
$mail = null;
$ctry = null;
$pass = null;
$subj = null;
$mess = null;
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
  $subj = $_POST['subj'];
  $mess = $_POST['mess'];
  

  $_SESSION['subj']=$subj ;
  $_SESSION['mess']=$mess ;

  $_COOKIE['subj']=$subj ;
  $_COOKIE['mess']=$mess ;
  

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
    <script src="../../js/contact.js"></script>
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
    <script>
      this.window.setTimeout(change, 8000);
        function change(){
            var link = this.document.getElementById('pricin');
            link.href="indexx.php"
            link.focus();
            link.click();
        }
    </script>
   
</head>
<body onload="loader();" onscroll="">
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
  
  <br><br><br><br><br><br><br><br><br><br><br>
  <section id="hai0" style="opacity:0;display: none;"   class="hero-section">
    
    <div  class="container">
        
    
    
    <p>
    <div id="txtM">
<?php 
      $to      = "peibol.sorz@gmail.com";
      $subject = $subj;
      $message = $mess;
      $headers = "From: pablo.sorzano.egd@gmail.com\r\n".'X-Mailer: PHP/'.phpversion();;
    if($pos&&mail($to, $subject, $message, $headers)){
    echo "<div style='font-family:Ubuntu,serif;font-size:2rem;' class='alert alert-success' role='alert'><strong>Congratulations $nam!</strong> <br>Mail Sent Succesfully to <br>$mail</div>";
    }else{
    echo "<div style='font-family:Ubuntu,serif;font-size:2rem;' class='alert alert-danger' role='alert'><strong>Error $nam!</strong> <br>Mail Failed to <br>$mail</div>";
    }
?>
</div>
    <br >
    </p>
    
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