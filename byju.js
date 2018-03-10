var x = document.getElementsByClassName("undefined");

function beep(){
    var root = document.getElementById("root");
    try{
        var len = m.firstChild.children[1].childNodes[0].firstChild.childNodes[0].childNodes[0].childNodes[0].childNodes[2].childNodes[0].childNodes[0].childNodes[2].childNodes[2].childNodes[1].length;
        if ( len != 0){
            x = null;
            var audio = new Audio("https://www.soundjay.com/button/beep-08b.mp3");
            audio.play();
        }
    }
    catch(err){
        // do nothing
    }
   
}



function tick() { 
    beep();
    if ( x != null ){
        x[1].click();    
    }
    else{
        console.log("Question fetched...");
        beep();
    }
    
 }

