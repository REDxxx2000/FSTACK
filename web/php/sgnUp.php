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

    <link href="../css/index.css" rel="stylesheet">
    <script src="../js/sgnUp.js"></script>
   
</head>
<body onload="loader();init();" onscroll="skrrol();">
  <div id="backG" style="opacity:0;display: none;"></div>
  
  <nav id="navG" style="opacity:0;display: none;" class="navbar navbar-expand-lg navbar-white bg-white fixed-top">
    <div class="container-fluid">
      <a id="init" class="navbar-brand" href="../../index.php">INIT
      <img id="initts" src="/web/images/logo.png" alt="logo">
      </a>
      <center><button id="menu" class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button></center>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" href="pricing.php">PRICING</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">CONTACT</a>
          </li>
          <li class="nav-item">
            <a id="lgIn" class="nav-link"  href="access.php">LOG IN</a>
          </li>
          <li class="nav-item">
            <a id="sgnUp" class="nav-link" href="sgnUp.php">SIGN UP</a>
          </li>
        </ul>
      </div>
      
    </div>
  </nav>
  
  <br><br>
  <section id="heroG" style="opacity:0;display: none;"  class="container-fluid text-center">
    <hr>
    
    
        <img id="imgCarrt" src="../images/usr1.jpg"/>
    
    <hr>
  </div>
  
    <form id="formula"  action="">  
        <div class="row align-items-start">
            <div class="col">
                <div id="heross" class="container">
                    
        
            
            
            
                    <label for="exampleFormControlInput1" class="form-label">
                        Name </label>&emsp;<a id="delX" class="btn" onclick="inputX('nam');">X</a>
                    <input id="txtNam" name="txtNam" class="form-control form-control " 
                    type="text" placeholder="Insert your name" 
                    aria-label=".form-control example" onkeypress="return noCharTxt(event);" onkeydown="return noCharTxt(event);"  minlength="3" maxlength="20"  required>
                    
                    
                
                
                    
                    <label for="exampleFormControlInput1" class="form-label">
                        Username</label>&emsp;<a id="delX" class="btn" onclick="inputX('usr');">X</a>    
                    <input id="txtUsr" name="txtUsr"  class="form-control" 
                    type="text" placeholder="Insert a valid username" 
                    aria-label="default input example" onkeypress="return noCharPass(event);" onkeydown="return noCharPass(event);"  minlength="8" maxlength="20"  required/>
                    </input>
                    
                </div>
            </div>
            <div class="col">
                <div id="heross" class="container">
                    
        
            
            
            
                    <label for="exampleFormControlInput1" class="form-label">
                        Age </label>&emsp;<a id="delX" class="btn" onclick="inputX('age');">X</a>
                    <input id="txtAge" name="txtAge"  class="form-control form-control " 
                    type="number" placeholder="Insert your age" 
                    aria-label=".form-control example" onkeypress="return noCharNmbr(event);" onkeydown="return noCharNmbr(event);" minlength="1" maxlength="40"   required>
                    
                    
                
                
                    
                    <label for="exampleFormControlInput1" class="form-label">
                        E-mail</label>&emsp;<a id="delX" class="btn" onclick="inputX('mail');">X</a>    
                    <input id="txtMail" name="txtMail"  class="form-control" 
                    type="email" placeholder="Insert your e-mail" 
                    aria-label="default input example" onkeypress="return noCharMail(event);" onkeydown="return noCharMail(event);" minlength="5" maxlength="40"   required/>
                    </input>
                    
                </div>
            </div>
            <div class="col">
                <div id="heross" class="container">
                    
        
            
            
            
                    <label for="exampleFormControlInput1" class="form-label">
                        Country </label>&emsp;<a id="delX" class="btn" onclick="inputX('ctry');">X</a>
                    <input id="txtCtry" name="txtCtry"  class="form-control form-control " 
                    type="text" placeholder="Insert your country" 
                    aria-label=".form-control example" onkeypress="return noCharTxt(event);" onkeydown="return noCharTxt(event);"  minlength="3" maxlength="20"  required>
                    
                    
                
                
                    
                    <label for="exampleFormControlInput1" class="form-label">
                        Password</label>&emsp;<a id="delX" class="btn" onclick="inputX('pass');">X</a>    
                    <input id="txtPass" name="txtPass"  class="form-control" 
                    type="password" placeholder="Insert a valid password" 
                    aria-label="default input example" onkeypress="return noCharPass(event);" onkeydown="return noCharPass(event);"  minlength="8" maxlength="20"  required/>
                    </input>
                    
                </div>
            </div>
   </div>
        <br><center><input id="validd" type="submit" class="btn" onclick="valUsr();" onfocus="valUsr();" value="Submit"></input></center>
    </form >
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