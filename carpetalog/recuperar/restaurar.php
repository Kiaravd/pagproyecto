<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <title>Recuperar contraseña</title>
</head>

<body>
    <form action="" method="POST">
        <div class="icono1">
            <img src="icono1.png">
        </div>
        <br><br><br>
        <h3>Recuperar contraseña</h3>
        <br><br>
        <p>
        <h4>Introduzca su cuenta de correo electrónico</h4>
        </p>
        <div id="noregistrado"></div>
        <br><br><br><br>
        <input class="boton1" id="cuentarecuperar" type="text" placeholder="Ejemplo@gmail.com" />
        <br><br><br><br>
        <input class="boton2" type="button" value="Cancelar" onclick="location.href='../'" /> 
        <input class="boton3" type="button" value="Recuperar" onclick="recuperar(document.getElementById('cuentarecuperar').value)" />
    </form>
</body>
<script src="javas.js"></script>
</html>