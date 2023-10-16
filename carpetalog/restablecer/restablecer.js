function restablecer(contraseña, recontraseña){
    $.ajax({
            url: 'restablecer.php',
            data: {'enviar':'restablecer', 'contraseña': contraseña, 'recontraseña': recontraseña},
            type: 'POST',
            dataType: 'json',
             success: function(data) {
                console.log(data)
                if(data['error'] == 0){
                    window.location.href = '../login/login.php';
                }
                else {
                    console.log("no se ingreso correctamente por :" + data['mensaje'] );   }             
            }
        });
    }