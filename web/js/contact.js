var fado = this.document.getElementById('preloader');
var backG = this.document.getElementById('backG');
var navG = this.document.getElementById('navG');
var sect = this.document.getElementById('hai0');

var mail = this.document.getElementById('txtMail');
var nam = this.document.getElementById('txtNam');
var mss = this.document.getElementById('txtMesssage');
var ctry = this.document.getElementById('txtCtry');

var form = this.document.getElementById('formula');

var btn = this.document.getElementById('validd');
var cont =0;


function loader() {this.window.setTimeout(fadeout, 3000);
    fado = this.document.getElementById('preloader');
    backG = this.document.getElementById('backG');
    navG = this.document.getElementById('navG');
    sect = this.document.getElementById('hai0');
    
    init();
    
    backG.style.cssText="opacity:0;display: none;";
    navG.style.cssText="opacity:0;display: none;";
    sect.style.cssText="opacity:0;display: none;";
    
   
    //===== Prealoder
    
   

    function fadeout() {
        // fado.value="uno"
        //alert(fado.value);
        fado.style.cssText="opacity:0;display: none;";
        backG.style.cssText="opacity:100;";
        navG.style.cssText="opacity:100;";
        sect.style.cssText="opacity:100;";
    
        skrrol();
    }


    

}

function skrrol() {
        var top = this.window.scrollY;
        heroG0 = this.document.getElementById('hero-0'); 
        heroG1 = this.document.getElementById('hero-1');
        // var hero = this.document.getElementsByName('hero0'); 
        // var hero1 = this.document.getElementsByName('hero1');
        //alert(top);
        if(top==0){
            heroG0.style.cssText="transform: scale(1);-webkit-transition: transform 1s ease;";
            heroG1.style.cssText="transform: scale(0);-webkit-transition: transform 1.7s ease;";
        }else if(top>3&&top<190){
            heroG0.style.cssText="transform: scale(0);-webkit-transition: transform 1s ease;";
            heroG1.style.cssText="transform: scale(0);-webkit-transition: transform 1.7s ease;";
        }else if(top>190){
            heroG1.style.cssText="transform: scale(1);-webkit-transition: transform 1.7s ease;";
        }
        
}


function init(){
mail = this.document.getElementById('txtMail');
nam = this.document.getElementById('txtNam');
mss = this.document.getElementById('txtMesssage');
ctry = this.document.getElementById('txtCtry');

  form = this.document.getElementById('formula');
  btn = this.document.getElementById('validd');


  mail.value="";
  nam.value="";
  mss.value="";
  ctry.value="";
  form.action="";
  btn.onclick="valUsr();";
}
function valUsr(){
  
  mail = this.document.getElementById('txtMail');
  nam = this.document.getElementById('txtNam');
  mss = this.document.getElementById('txtMesssage');
  ctry = this.document.getElementById('txtCtry');
  cont=0;

  form = this.document.getElementById('formula');
  btn = this.document.getElementById('validd');
  form.action="";
  btn.onclick="valUsr();";
  
  if(mail.value!=''&&nam.value!=''&&mss.value!=''&&ctry.value!=''){
    //alert('inicio de validacion');
    var nn= noCharSPTxt(nam.value);
    var mm= noCharSP(mail.value);
    var cc= noCharSPTxt(ctry.value); 
    var ms= noCharSPTxt(mss.value);
    
 
    //alert(mm+'  valores '+nn+'  valores '+ms+'  valores '+cc);
    if(mm=='mail'&&nn=='txt'&&ms=='txt'&&cc=='txt'){
      //alert('Sent');    
      form.action="mail.php";
      form.method="post";
          btn.onclick="";
          btn.type="submit";
          btn.focus();
      }else{
              //alert('Valores no coinciden');
              init();

      }
  }
  
  //form.action="sgnup.html";
  //btn.onclick="";
  //btn.focus();
  
}
function noCharSP(e){
  
  var key = e.split("");
  var kul=0;
  
  var arr=0;
    //alert(key);
    var com="1234567890abcdefghijklmnopqrstuvwxyzñABCDEFGHIJKLMNOPQRSTUVWXYZÑ.@";
    var parative = com.split("");
    //alert(parative.length);
    for(j=0;j<key.length;j++){
      for(i=0;i<parative.length;i++){
        if(key[j]==parative[i]){
          //alert(key[j]+' match mail '+parative[i]);
          kul++;
          if(key[j]=='@'){arr++;}else{}
        
      }
    }
}
if(arr!=1){
  kul-=2;
}else{}
  //alert(kul+' longit '+key.length);
  if(key.length<3){
    //alert('Error, deben ser más de 3 caracteres');
    if(cont==0){alert('Type correct values');}else{}
            cont++;
      init();

  }else{
    //alert('Todo bien parecer ser');
    if(kul==key.length){
        //alert('Todo bien en mail');
        return 'mail';
    }else if(kul!=key.length){
          if(cont==0){alert('Type correct values');}else{}
          cont++;
          init();
          return 'error';
    }else{
      //alert('Inserta valores correctos');
      cont++;
          init();
          return 'error';
    }
  }

  
  //var cumple = parative.every(function esCharSp(valor){
    //  alert(key);
    //  alert(valor);
    //  return key == valor; 
    //});
  
}
function noCharSPass(e){
 
  var key = e.split("");
  var kul=0;
    //alert(key);
    var com="1234567890abcdefghijklmnopqrstuvwxyzñABCDEFGHIJKLMNOPQRSTUVWXYZÑ";
    var parative = com.split("");
    //alert(parative.length);
    for(j=0;j<key.length;j++){
      for(i=0;i<parative.length;i++){
        if(key[j]==parative[i]){
          //alert(key[j]+' match pass '+parative[i]);
          kul++;
          
        }else{
          //alert(key[j]+' no match '+parative[i]);}
        }
    }
  }
  //alert(kul+' longit '+key.length);
  if(key.length<3){
    //alert('Error, deben ser más de 3 caracteres');
    if(cont==0){alert('Type correct values');}else{}
            cont++;
    init();
  }else{
    //alert('Todo bien parecer ser');
            if(kul==key.length){
                //alert('Todo bien en pass');
                return 'pass';
            }else if(kul!=key.length){
              if(cont==0){alert('Type correct values');}else{}
              cont++;
                  init();
                  return 'error';
            }else{
              //alert('Inserta valores correctos');
              cont++;
                  init();
                  return 'error';
            }
  }
  
  //var cumple = parative.every(function esCharSp(valor){
    //  alert(key);
    //  alert(valor);
    //  return key == valor; 
    //});
  
}
function noCharSPTxt(e){
  
  var key = e.split("");
  var kul=0;
    //alert(key);
    var com="abcdefghijklmnopqrstuvwxyzñABCDEFGHIJKLMNOPQRSTUVWXYZÑ";
    var parative = com.split("");
    //alert(parative.length);
    for(j=0;j<key.length;j++){
      for(i=0;i<parative.length;i++){
        if(key[j]==parative[i]){
          //alert(key[j]+' match txt '+parative[i]);
          kul++;
          
        }else{
          //alert(key[j]+' no match '+parative[i]);}
        }
    }
  }
  //alert(kul+' longit '+key.length);
  if(key.length<3){
    //alert('Error, deben ser más de 3 caracteres');
    if(cont==0){alert('Type correct values');}else{}
            cont++;
    init();
  }else{
    //alert('Todo bien parecer ser');
            if(kul==key.length){
                //alert('Todo bien en txt '+e);
                return 'txt';
            }else if(kul!=key.length){
              if(cont==0){alert('Type correct values');}else{}
              cont++;
                  init();
                  return 'error';
            }else{
              //alert('Inserta valores correctos');
              cont++;
              init();
                  return 'error';
            }
  }
  
  //var cumple = parative.every(function esCharSp(valor){
    //  alert(key);
    //  alert(valor);
    //  return key == valor; 
    //});
  
}
function noCharSPNmbr(e){
  
  var key = e.split("");
  var kul=0;
    //alert(key);
    var com="1234567890";
    var parative = com.split("");
    //alert(parative.length);
    for(j=0;j<key.length;j++){
      for(i=0;i<parative.length;i++){
        if(key[j]==parative[i]){
          //alert(key[j]+' match nmbr '+parative[i]);
          kul++;
          
        }else{
          //alert(key[j]+' no match '+parative[i]);}
        }
    }
  }
  //alert(kul+' longit '+key.length);
  if(key.length<3){
    //alert('Error, deben ser más de 3 caracteres');
    if(cont==0){alert('Type correct values');}else{}
            cont++;
    init();
  }else{
    //alert('Todo bien parecer ser');
            if(kul==key.length){
                //alert('Todo bien en nmbr '+e);
                return 'nmbr';
            }else if(kul!=key.length){
              if(cont==0){alert('Type correct values');}else{}
              cont++;
                  init();
                  return 'error';
            }else{
                  //alert('Inserta valores correctos');
                  cont++;
                  init();
                  return 'error';
            }
  }
  
  //var cumple = parative.every(function esCharSp(valor){
    //  alert(key);
    //  alert(valor);
    //  return key == valor; 
    //});
  
}

function forPass(){
  
  pass = this.document.getElementById('fPass');
  pass.onclick="";
  pass.href="forPass.html";
  pass.focus();

}
function noCharMail(e){
  var key = e.key;
  //alert(key);
  var com="1234567890abcdefghijklmnopqrstuvwxyzñABCDEFGHIJKLMNOPQRSTUVWXYZÑ.@";
  var parative = com.split("");
  //alert(parative.length);
  
  for(i=0;i<parative.length;i++){
    //alert(parative[i]);
    if(key==parative[i]){
    return true;
    }else{
    }
    
  }return false;
}
function noCharPass(e){
  var key = e.key;
  //alert(key);
  var com="1234567890abcdefghijklmnopqrstuvwxyzñABCDEFGHIJKLMNOPQRSTUVWXYZÑ";
  var parative = com.split("");
  //alert(parative.length);
  
  for(i=0;i<parative.length;i++){
    //alert(parative[i]);
    if(key==parative[i]){
    return true;
    }else{
    }
    
  }return false;
}
function noCharTxt(e){
  var key = e.key;
  //alert(key);
  var com="abcdefghijklmnopqrstuvwxyzñABCDEFGHIJKLMNOPQRSTUVWXYZÑ";
  var parative = com.split("");
  //alert(parative.length);
  
  for(i=0;i<parative.length;i++){
    //alert(parative[i]);
    if(key==parative[i]){
    return true;
    }else{
    }
    
  }return false;
}
function noCharNmbr(e){
  var key = e.key;
  //alert(key);
  var com="1234567890";
  var parative = com.split("");
  //alert(parative.length);
  
  for(i=0;i<parative.length;i++){
    //alert(parative[i]);
    if(key==parative[i]){
    return true;
    }else{
    }
    
  }return false;
}
function inputX(e){
  mail = this.document.getElementById('txtMail');
  nam = this.document.getElementById('txtNam');
  mss = this.document.getElementById('txtMesssage');
  ctry = this.document.getElementById('txtCtry');
  
  if(e=='mail'){
    mail.value="";
  }
  if(e=='nam'){
      nam.value="";
  }
  if(e=='mss'){
      mss.value="";
  }
  if(e=='ctry'){
      ctry.value="";
  }
  

}
