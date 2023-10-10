<?php 
include ('../codigo.php');
$con = mysqli_connect(HOST, USER, PASSWORD, DB);
switch ($_POST['enviar']) {
    case 'recuperar':
        $email = $_POST["email"];
        $sql = "SELECT * FROM usuarios WHERE correo = '$email' ";
        $result = mysqli_query($con, $sql);
        if ($result && mysqli_num_rows($result) == 1) {
            echo json_encode(array('error' => 0, 'mensaje' => 'encontrado'));
        } else {
            echo json_encode(array('error' => 1, 'mensaje' => 'acceso denegado'));
        }
        break;
    case 'nada':
        break;
}
?>