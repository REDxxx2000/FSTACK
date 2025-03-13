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
    <script src="../../js/letContact.js"></script>
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
  
  <br><br><br>
  <section id="hai0"  class="hero-section">
    
    <div id="hai5" class="container">
        
    <hr>
    <div id="subtitle">MANAGEMENT</div>
    <p>
    <div id="txtM">PABLO SORZANO TORRES
    <br>+52 999 418 9498
    <br ><span id="txtmin">chester.redBain@gmail.com</span>
    </p>
    <hr>
    </div>
    
        <form id="formula" action="">
        <label for="exampleFormControlInput1" class="form-label">
            Name</label>&emsp;
            <input disabled 
            value='<?php if($pos){echo $nam;}else{} ?>' id="txtNam" class="form-control" 
        type="text" placeholder="Insert your name" 
        aria-label=".form-control example"  onkeypress="return noCharTxt(event);" onkeydown="return noCharTxt(event);"  minlength="3" maxlength="20"  required/>
        
        
            <label for="exampleFormControlInput1" class="form-label">
            Email </label>&emsp;
        <input disabled
        value='<?php if($pos){echo $mail;}else{} ?>'id="txtMail" class="form-control" 
        type="email" placeholder="Insert your e-mail" 
        aria-label=".form-control example" onkeypress="return noCharMail(event);" onkeydown="return noCharMail(event);"  minlength="3" maxlength="40"  required/>
        
        <label for="exampleFormControlInput1" class="form-label">
            Subject</label> &emsp;<a id="delX" class="btn" onclick="inputX('ctry');">X</a>      
        <input id="txtCtry" name="subj" class="form-control" 
        type="text" placeholder="Insert subject" 
        aria-label=".form-control example" onkeypress="return noCharTxt(event);" onkeydown="return noCharTxt(event);"  minlength="3" maxlength="20"  required/>
        
        
        <label for="exampleFormControlInput1" class="form-label">
                Message</label>  &emsp;<a id="delX" class="btn" onclick="inputX('mss');">X</a>     
        <input id="txtMesssage" name="mess" class="form-control" 
        type="text" placeholder="Insert your message" 
        aria-label=".form-control example" onkeypress="return noCharTxt(event);" onkeydown="return noCharTxt(event);"  minlength="3" maxlength="20"  required/>

        
        
        <br><input id="validd" type="submit" class="btn" onclick="valUsr();" onfocus="valUsr();" value="Submit"></input>
        </form>
        

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