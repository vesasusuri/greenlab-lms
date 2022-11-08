



var page = 1;
var float = document.getElementById("float1");
var float2 = document.getElementById('float2');

var login_Animation = 0;



document.getElementById("nextP").onclick = function animation(){

    if (page == 1) {
        page = 2;
        $('#blob').toggleClass('blob_animation');
        setTimeout(() => {
            document.getElementById('conf').style.scale = 1; 

            document.getElementById('conf').play();

            float.classList.toggle('fade');
        
         document.getElementById("main_heading").innerHTML = "We offer premium and easy to use tools for schools, teachers, students and parents";
         document.getElementById("sub_heading").innerHTML = "Our tools such as an online grading system,tasker, daily report, live chat with students and their parents, will make your job way easier.";
         document.getElementById("nextP").innerHTML = "more about us";

         console.log(page);
        }, 1000);   
    }
    else if(page == 2){
        page = 3;
       
        float2.classList.toggle('fade');

        document.getElementById("main_heading").innerHTML = "More about pupill and why u should trust it";
        document.getElementById("sub_heading").innerHTML = "Pupill is a lms used by schools and trusted by big companies worldwide. Founded by Lirik Rexhepi, pupill now is climbing the laderboard and is becoming #1 lms for education";
        document.getElementById("nextP").innerHTML = "";



   }
    
}


document.getElementById("register").onclick = function animation(){

    login_Animation = 1;
}

if (login_Animation==1){
        body.classList.toggle('fade');
}





function login(){
    

}



function register(){
    

}

