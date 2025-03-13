var fado = this.document.getElementById('preloader');
var backG = this.document.getElementById('backG');
var navG = this.document.getElementById('navG');
var sect = this.document.getElementById('hai0');
var hai = this.document.getElementById('heroG0');

var mail = this.document.getElementById('txtMail');
var form = this.document.getElementById('formula');

var btn = this.document.getElementById('validd');
var cont =0;

  

function loader() {this.window.setTimeout(fadeout, 3000);
    fado = this.document.getElementById('preloader');
    backG = this.document.getElementById('backG');
    navG = this.document.getElementById('navG');
    sect = this.document.getElementById('hai0');
    hai = this.document.getElementById('heroG0');
    
    init();
    
    backG.style.cssText="opacity:0;display: none;";
    navG.style.cssText="opacity:0;display: none;";
    sect.style.cssText="opacity:0;display: none;";
    hai.style.cssText="opacity:0;display: none;";
    
   
    //===== Prealoder
    
   

    function fadeout() {
        // fado.value="uno"
        //alert(fado.value);
        fado.style.cssText="opacity:0;display: none;";
        backG.style.cssText="opacity:100;";
        navG.style.cssText="opacity:100;";
        sect.style.cssText="opacity:100;";
        hai.style.cssText="opacity:100;";
    
        skrrol();
    }


    

}

function skrrol() {
        var top = this.window.scrollY;
        heroG0 = this.document.getElementById('heroG0'); 
        heroG1 = this.document.getElementById('hai0');
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
        form = this.document.getElementById('formula');
        btn = this.document.getElementById('validd');
        mail.value="";
        form.action="";
        btn.onclick="valUsr();";
      }
      function valUsr(){
        mail = this.document.getElementById('txtMail');
        
        
        if(mail.value!=''){
          var mm= noCharSP(mail.value);
          //alert(mm+' match valores '+pp);
          if(mm=='mail'){
            alert('Sending e-mail');
            form.action="/web/php/smail.php";
            form.method="post";
            btn.onclick="";
            btn.focus();}else{
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
        if(key.length<5){
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
        if(key.length<8){
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

      function forPassw(){
        pass = this.document.getElementById('fPass');
        //alert('llega');
        pass.onclick="";
        pass.href="forPass.php";
        pass.focus();
        pass.click();

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
      function inputX(e){
        mail = this.document.getElementById('txtMail');
        if(e=='mail'){
          mail.value="";
        }
      }