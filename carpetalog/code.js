var ojo1= document.getElementById('ojo1');
var ojo2= document.getElementById('ojo2');
var input1= document.getElementById('registerPassword');
var input2= document.getElementById('registerRepeatPassword');
var contraseña= document.getElementById('registerPassword').value;
var contraseñarepetida=document.getElementById('registerRepeatPassword').value
   
ojo1.addEventListener("click", function(){
if(input1.type== "password"){
    input1.type="text"
    ojo1.style.opacity=0.2
}
else{
    input1.type ="password"
    ojo1.style.opacity=0.8
}
})
ojo2.addEventListener("click", function(){
    if(input2.type== "password"){
        input2.type="text"
        ojo2.style.opacity=0.2
    }
    else{
        input2.type ="password"
        ojo2.style.opacity=0.8
    }
    })

    var cerrarpopup = document.getElementById("cerrar");
    var overlay = document.getElementById("overlay");
    var popup = document.getElementById("popup");
    var boton = document.getElementById("button");
    x=0;
    $("#checkpop").click(function () {
        x+=1;
        par=  x % 2 === 0
        if(par == false){
            $("#continuarpop").click(function () {
                overlay.style.display = 'none';
                popup.style.display = 'none';
            });
        }
        else{
            $("#continuarpop").click(function () {
                popup.style.display = 'block';
            });
           
        }
    });
     
   
        
    cerrarpopup.onclick = function() {
      overlay.style.display = 'none';
      popup.style.display = 'none';
    }

  