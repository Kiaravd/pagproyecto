<script>
function login(correo, contraseña){
    $.ajax({
            url: 'verificacion.php',
            data: {'enviar':'verificar', 'email': correo, 'contraseña': contraseña},
            type: 'POST',
            dataType: 'json',
             success: function(data) {
                if(data['error'] == 0){
                    window.location.href = '../../paginaprincipal.php';
                }
                else {
                    alert("no se ingreso correctamente por :" + data['mensaje'] );   }             
            }
        });
    }
</script>