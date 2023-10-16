<?php
include('../codigo.php');
$con = mysqli_connect(HOST, USER, PASSWORD, DB);
switch ($_POST['enviar']) {
    case 'recuperar':
        $email = $_POST["email"];
        $token= uniqid();
        $sql = "UPDATE usuarios SET token = '$token' WHERE correo = '$email' ";
        $result = mysqli_query($con, $sql);
        $sql = "SELECT * FROM usuarios WHERE correo = '$email' ";
        $result = mysqli_query($con, $sql);
        if ($result && mysqli_num_rows($result) == 1) {
            include ('configmail.php');
        } else {
            echo json_encode(array('error' => 1, 'mensaje' => 'no existe en la DB'));
        }
        break;
    case 'nada':
        break;
}
