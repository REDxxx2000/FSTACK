var fado = this.document.getElementById('preloader');
var backG = this.document.getElementById('backG');
var navG = this.document.getElementById('navG');
var heroG0 = this.document.getElementById('heroG0'); 
var heroG1 = this.document.getElementById('heroG1');


function loader() {this.window.setTimeout(fadeout, 3000);
    fado = this.document.getElementById('preloader');
    backG = this.document.getElementById('backG');
    navG = this.document.getElementById('navG');
    heroG0 = this.document.getElementById('heroG0'); 
    heroG1 = this.document.getElementById('heroG1');
    
    
    
    backG.style.cssText="opacity:0;display: none;";
    navG.style.cssText="opacity:0;display: none;";
    heroG0.style.cssText="opacity:0;display: none;";
    heroG1.style.cssText="opacity:0;display: none;";
   
    //===== Prealoder
    
   

    function fadeout() {
        // fado.value="uno"
        //alert(fado.value);
        fado.style.cssText="opacity:0;display: none;";
        backG.style.cssText="opacity:100;";
        navG.style.cssText="opacity:100;";
        heroG0.style.cssText="opacity:100;";
        heroG1.style.cssText="opacity:100;"; 
         
        skrrol();
    }


    

}

function skrrol() {
        
        var top = this.window.scrollY;
        heroG0 = this.document.getElementById('heroG0'); 
        heroG1 = this.document.getElementById('heroG1');
        // var hero = this.document.getElementsByName('hero0'); 
        // var hero1 = this.document.getElementsByName('hero1');
        //alert(top);
        if(top==0){
            heroG0.style.cssText="transform: scale(1);-webkit-transition: transform 1s ease;";
            heroG1.style.cssText="transform: scale(0);-webkit-transition: transform 1.7s ease;";
        }else if(top>3&&top<150){
            heroG0.style.cssText="transform: scale(0);-webkit-transition: transform 1s ease;";
            heroG1.style.cssText="transform: scale(0);-webkit-transition: transform 1.7s ease;";
        }else if(top>150||top==529){
            heroG1.style.cssText="transform: scale(1);-webkit-transition: transform 1.7s ease;";
        }
        
}