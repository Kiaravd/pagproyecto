<script>
function registrar(correo, contraseña, repetircon){
    alert(correo+' '+ contraseña)
    $.ajax({
            url: 'ingresar.php',
            data: {'action':'incluir', 'correo': correo, 'pass': contraseña, 'reppass': repetircon},
            type: 'POST',
            dataType: 'json',
             success: function(data) {
                if(data['error'] == 0){
                    window.location.href = '../login/login.php';
                }
                else 
                  {  alert("no se ingreso correctamente por :" + data['mensaje'] );     }           
            }
        });
    }
  
function comprobar( email, contraseña, repetircon,){

    var aviso= document.getElementById('aviso')
    var incorrecto= document.getElementById('incorrecto')
    var verificar= false;
    var inputs = document.querySelectorAll("input");
    inputs.forEach(input => {
        if(input.value ===""){
            verificar=true;
        }
    });
    if(verificar){
        aviso.innerHTML= 'Complete todos los campos'  
    }
    else{
        aviso.innerHTML ='';
    }
//    email.value.forEach(correo => {
//         if(correo.includes('@gmail.com')){
//         }
//         else{
//             incorrecto.innerHTML ='correo no compatible';    
//         }
//    });

}
function validarformulario(contraseña, repetircon){
    if( contraseña.value != repetircon.value){
    return false;
   }
    return true;
}
</script>