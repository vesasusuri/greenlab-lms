var pomodoro = document.getElementById('pomodoro');
var shortBreak = document.getElementById('shortBreak');
var longBreak = document.getElementById('longBreak');


var pomodoroTime = 25;
var shortBreakTime = 5;
var longBreakTime = 10;

var mode;

var start = true;
var minute = 0;
var sec = 0;
console.log(start);

var countdownTime =  null;


var originalMinute = minute;
console.log(originalMinute);




document.getElementById('startButton').onclick = function(){

    if(minute==0 && sec==0){

        swal({
            title: "Error",
            text: "Click an option before starting!",
            icon: "error",
          });

    }
    else{
    function countdown() {
        
        sec--;
        if (sec <= 00) {
          minute --;
          sec = 59;}
        if (minute == 0 && sec <= 1 ) {
            minute = originalMinute;
            sec = 0;
            document.getElementById("startButton").innerHTML = "start";
            clearInterval(countdownTime);
            swal({
                title: "Good job!",
                text: "You finished your session!",
                icon: "success",
              });
              if(mode == "pomodoro"){
                document.getElementById("treeCounter").innerHTML = parseInt(document.getElementById("treeCounter").innerHTML) + 1   
              }
          }
          document.getElementById("timer").innerHTML = minute + ":" + sec;
        
    }

        if(start == true){
        document.getElementById("startButton").innerHTML = "stop";
        start = false;
        countdownTime =  setInterval(countdown, 1000);
          
    }

        else if(start == false){
            clearInterval(countdownTime);
            document.getElementById("startButton").innerHTML = "start";
            start = true;

            
        }
}}


document.getElementById('restartButton').onclick = function(){
    
    minute = originalMinute;
    sec = 00;
    document.getElementById("timer").innerHTML = minute + ":" + sec;
    clearInterval(countdownTime);
    document.getElementById("startButton").innerHTML = "start";
    start = true;


}



pomodoro.onclick = function(){

    
    
    minute = 0;
    sec = 10;
    document.getElementById("timer").innerHTML = minute + ":" + sec;
    originalMinute = minute;
    clearInterval(countdownTime);
    document.getElementById("startButton").innerHTML = "start";
    start = true;
    mode = "pomodoro";

   
    //Styling Changes
    

    document.getElementById('pomodoro').style.background = "white";
    document.getElementById('pomodoro').style.color = "black";
    document.getElementById('shortBreak').style.background = "transparent";
    document.getElementById('shortBreak').style.color = "white";
    document.getElementById('longBreak').style.background = "transparent";
    document.getElementById('longBreak').style.color = "white";
    
}


shortBreak.onclick = function(){

    
    minute = shortBreakTime;
    sec = 00;
    document.getElementById("timer").innerHTML =  minute + ":" + sec;
    originalMinute = minute;
    clearInterval(countdownTime);
    document.getElementById("startButton").innerHTML = "start";
    start = true;
    mode = "shortBreak"


     //Styling Changes

    document.getElementById('pomodoro').style.background = "transparent";
    document.getElementById('pomodoro').style.color = "white";
    document.getElementById('shortBreak').style.background = "white";
    document.getElementById('shortBreak').style.color = "black";
    document.getElementById('longBreak').style.background = "transparent";
    document.getElementById('longBreak').style.color = "white";

}



longBreak.onclick = function(){

    
    minute = longBreakTime;
    sec = 00;
    document.getElementById("timer").innerHTML = minute + ":" + sec;
    originalMinute = minute;
    clearInterval(countdownTime);
    document.getElementById("startButton").innerHTML = "start";
    start = true;
    mode = "longBreak";

     //Styling Changes

     document.getElementById('pomodoro').style.background = "transparent";
     document.getElementById('pomodoro').style.color = "white";
     document.getElementById('shortBreak').style.background = "transparent";
     document.getElementById('shortBreak').style.color = "white";
     document.getElementById('longBreak').style.background = "white";
     document.getElementById('longBreak').style.color = "black";

}


document.getElementById('settingsButton').onclick = function(){
    
    document.getElementById('popupSettings').style.display = "block";


}



document.getElementById('settingsButton').onclick = function(){

    $("#popupSettings").fadeIn();
    $("#popupSettings").fadeIn("slow");
    $("#popupSettings").fadeIn(3000);



}

document.getElementById('closeButton').onclick = function(){

    $("#popupSettings").fadeOut();
    $("#popupSettings").fadeOut("fast");
    $("#popupSettings").fadeOut(2500);



}


document.getElementById('saveSettings').onclick = function(){



    pomodoroTime = $("#pomodoroLength").val();
    shortBreakTime = $("#shortLength").val();
    longBreakTime = $("#longLength").val();



    $("#popupSettings").fadeOut();
    $("#popupSettings").fadeOut("fast");
    $("#popupSettings").fadeOut(2500);

    swal({
        title: "Completed",
        text: "Changes were saved!",
        icon: "success",
      });


}