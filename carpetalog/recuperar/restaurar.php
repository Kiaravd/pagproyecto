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
            <img src="iconos/icono1.png">
        </div>
        <br><br><br>
        <div class="text-center">
            <h3>Recuperar contraseña</h3>
        </div>

        <br><br>
        <p class="correo">
            Introduzca su cuenta de correo electrónico
        </p>
        <div id="noregistrado"></div>
        <br><br><br><br>
        <div class="botones">
            <input class="text1" type="text" id="recuperarinput" placeholder="Ejemplo@gmail.com" />
            <br><br><br><br>
            <div class="btn1">
                <input class="boton2" type="button" value="Cancelar" onclick="location.href='../login/login.php'" />
            </div>
            <div class="btn2">
                <input class="boton3" onclick="recuperar(document.getElementById('recuperarinput').value)" type="button" value="Recuperar" />
            </div>
        </div>
    </form>
</body>
<script src="javas.js"></script>
</html>