function recuperar(correo){
    $.ajax({
            url: 'recuperar.php',
            data: {'enviar':'recuperar', 'email': correo},
            type: 'POST',
            dataType: 'json',
             success: function(data) {
                console.log(data['mensaje'] ); 
                if(data['error'] == 0){
                    window.location.href = '../codigore/codigore.php';
                    console.log(data['mensaje'] ); 
                }
                else {
                    imprimir=document.getElementById('noregistrado');
                        imprimir.innerHTML = 'Correo no registrado'
                        console.log("no se ingreso correctamente por :" + data['mensaje'] ); 
                    }
            }
        });
    }