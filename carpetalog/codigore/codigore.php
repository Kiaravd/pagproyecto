<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <title> Codigo recuperar</title>

</head>

<body>
    <form>
        <div class="icono1">
            <img src="icono1.png">
        </div>

        <br><br>
        <h3>Te hemos enviado el código</h3>
        <br><br>
        <p>
        <h4>A continuación ingrese el código que le hemos enviado a su correo electrónico en este apartado. </h4>
        </p>
        <br><br><br>
        <input class="boton1" id="codigore" type="text" maxlength="6" placeholder="-   -   -   -   -   -" />
        <br><br><br>
        <input class="boton2" type="button" value="Cancelar" onclick="location.href='../recuperar/restaurar.php'" />
        <input class="boton3" type="button" value="Continuar"
            onclick="location.href='../restablecer/restaurarcontra.php'" />
    </form>
    <script src="javas.js"></script>
</body>

</html>