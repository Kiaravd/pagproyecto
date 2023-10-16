function comprobar(codigo){
    $.ajax({
            url: 'codigo.php',
            data: {'enviar':'comprobar', 'codigo': codigo},
            type: 'POST',
            dataType: 'json',
             success: function(data) {
                if(data['error'] == 0){
                    window.location.href = '../restablecer/restaurarcontra.php';
                }
                else {
                        console.log("no se ingreso correctamente por :" + data['mensaje'] ); 
                    }
            }
        });
    }