function login(correo, contraseña){
    $.ajax({
            url: 'verificacion.php',
            data: {'enviar':'verificar', 'email': correo, 'contraseña': contraseña},
            type: 'POST',
            dataType: 'json',
             success: function(data) {
                console.log(data)
                if(data['error'] == 0){
                    window.location.href = '../../paginaprincipal.php';
                }
                else {
                    console.log("no se ingreso correctamente por :" + data['mensaje'] );   }             
            }
        });
    }