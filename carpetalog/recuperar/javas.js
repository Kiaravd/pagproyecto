function recuperar(correo){
    $.ajax({
            url: 'recuperar.php',
            data: {'enviar':'recuperar', 'email': correo},
            type: 'POST',
            dataType: 'json',
             success: function(data) {
                if(data['error'] == 0){
                    alert(data['mensaje'] ); 
                    window.location.href = '../codigore/codigore.php';
                }
                else {
                    imprimir=document.getElementById('noregistrado');
                        imprimir.innerHTML = 'Correo no registrado'
                        console.log("no se ingreso correctamente por :" + data['mensaje'] ); 
                    }
            }
        });
    }