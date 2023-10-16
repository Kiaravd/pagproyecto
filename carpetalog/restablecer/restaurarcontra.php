<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="restaurar.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
</head>

<body>
    <title class="titulo">Restablecer contraseña</title>

    <form>
        <div class="icono1">
            <img src="iconos/lock.png">
        </div>
        <div class="icono2">
            <img src="iconos/lock.png">
        </div>
        <div class="icono3">
            <img src="iconos/contra.png" id="ojo1">
        </div>
        <div class="icono4">
            <img src="iconos/contra.png" id="ojo2">
        </div>

        <br><br>
        <h2>Restablecer contraseña</h2>
        <br><br>
        <input class="boton1" type="password" placeholder="Contraseña" id="registerPassword"/>
        <br><br><br>
        <input class="boton2" type="password" placeholder="Confirmar contraseña" id="registerRepeatPassword" />
        <br><br><br>

        <input class="boton3" id="icono1" type="button" value="Cancelar" onclick="location.href='../recuperar/restaurar.php'"> 
        <input class="boton4" id="icono2" type="button" value="Restablecer" onclick="restablecer(document.getElementById('registerPassword').value, document.getElementById('registerRepeatPassword').value)">

    </form>
<script src="restablecer.js"></script>
<script src="../code.js"></script>
</body>

</html>