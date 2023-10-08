<?php
include('../codigo.php');
$con = mysqli_connect(HOST, USER, PASSWORD, DB);
switch ($_POST['enviar']) {
    case 'verificar':
        $email = $_POST["email"];
        $contraseña = $_POST["contraseña"];
        $sql = "SELECT * FROM usuarios WHERE correo= '$email' and pass = '$contraseña' ";
        $result = mysqli_query($con, $sql);
        if ($result && mysqli_num_rows($result) == 1) {
            echo json_encode(array('error' => 0));
        } else {
            echo json_encode(array('error' => 1, 'mensaje' => 'acceso denegado'));
        }
        break;
    case 'nada':
        break;
}
?>