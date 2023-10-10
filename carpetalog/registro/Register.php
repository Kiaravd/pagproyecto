<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Alata&display=swap" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <link rel="stylesheet" href="Register.css"/>
</head>
<body>
  <div class="tab-pane fade" id="pills-register" role="tabpanel" aria-labelledby="tab-register">
    <form>
     </div>
      <div class="register-box">
        <h1 class="titulo">Crear cuenta</h1>
      <h1 class="text-center"></h1>
      <center> <span id="aviso"></span></center>
      <div class="logo1"> 
      <img  class="logo" src="iconos/Vte.png">
      </div>

      <form id="formulario" onsubmit="return validarformulario(document.getElementById('registerPassword'), document.getElementById('registerRepeatPassword'))">
      <!-- Email input -->
      <div class="email">
      <input type="email" placeholder="Ejemplo123@hotmail.com" id="registerEmail" class="form-control" />
      </div>

     
      <!-- Password input -->
      <div class="contraseña">
      <input type="password" placeholder="Contraseña" id="registerPassword" class="form-control " />
      </div>

      <!-- Repeat Password input -->
      <div class="repetircontra">
      <input type="password" placeholder="Repetir contraseña" id="registerRepeatPassword" class="form-control" />
      </div>
      <button onclick=" registrar(document.getElementById('registerEmail').value, document.getElementById('registerPassword').value,document.getElementById('registerRepeatPassword').value),comprobar(document.getElementById('registerEmail'), document.getElementById('registerPassword'), document.getElementById('registerRepeatPassword'))"  type="button" class="confirmar">Continuar</button>
      </form>

        <a type="submit" class="cuenta">¿Ya tienes una cuenta?</a> 
        <div id="contenidoprincipal">
    
    <div class="manita">
    <a id="button" class="terminos">Términos y condiciones</a>
    </div>

  
     </div> 
    

     <div class="p1 y p2">                                    
      <h5 class="punto1">  ● Una mayúscula </h5>
      <h5 class="punto2">  ● Mínimo 6 caracteres</h5>
       </div> 
      <div class="p3 y p4">                                    
    <h5 class="punto3">  ● Combinación de números y letras</h5>
      <h5 class="punto4">  ● Uso de minúsculas</h5>

     </div>  <div class="icono1" >
        <img  src="iconos/lock.png" >
    </div>

    <div class="icono2" >
        <img  src="iconos/lock.png" >
    </div>

    <div class="icono3">
      <img src="iconos/contra.png" id="ojo1">
    </div>

    <div class="icono4">
      <img src="iconos/contra.png" id="ojo2">
    </div>

    <div class="icono5" >
      <img  src="iconos/User.png" >
  </div>
     </form>
  
  </div>
  
  <!-- Popup de Términos -->
<div id="overlay"></div> 
<div class="borde">  
<div id="popup">
    <div class="popupcontrols">
        <span id="cerrar">X</span>
    </div>
    <div class="contenido">
      <form  class="tyc" >  
        <h1 class="t1">Términos y condiciones</h1>
        <p id="">Nosotros somos proveedores del pasaje de boleto, la disposición de residencias en la cual pueda elegir donde alojarse basándose en sus adquisiciones y sobre el viaje en la cual se puede realizar ya sea por  un bus o avión.  </p>
        <p id="">Acerca del viaje estos se harán vuelos nacionales en la que vas a poder visitar varias provincias con paisajes, eventos y sus derivados que diferencia una provincia de la otra.</p>
        <p id="">En el caso de que usted como cliente tenga algún inconveniente con abordar el viaje se le dará como rembolso un porcentaje de toda la compra si es que cancela este mismo con una anticipación de mínimo 1 semana, en caso de que no sea así no nos hacemos cargo de que usted no reciba algún tipo de reembolso.</p>
        <p id="">Para poder hacer reservas de viajes en nuestra empresa se deberá ser mayor de edad (18 años) de lo contrario aquel menor deberá ser acompañado de un adulto responsable o tutor.
        <p id="">En caso de algún retraso con su vuelo nosotros no nos hacemos cargo ya que este depende de la empresa y nosotros solo nos hacemos cargo de brindar dicho boleto de la empresa.</p>
        <input type="checkbox" id="checkpop" >Acepto todos los terminos y condiciones</input>
      </form>
        <br> 
        <br>
        <input type="button" class="continuar" id="continuarpop" value="Continuar"></input>
      </div>
</div>
</div>
 <script src="../code.js"></script>
 <?php include('javascript.php'); ?>
</body>
</html>