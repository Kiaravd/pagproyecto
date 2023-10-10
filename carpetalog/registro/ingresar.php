<?php
include('../codigo.php');
$con = mysqli_connect(HOST, USER, PASSWORD, DB);
switch ($_POST['action']) {
    case 'incluir':

        $email =  $_POST['correo'];
        $sql = "SELECT * FROM usuarios WHERE correo = '$email'";
        $result = mysqli_query($con, $sql);
        if ($result && mysqli_num_rows($result) == 1) {
            echo json_encode(array('error' => 1, 'mensaje' => 'correo ya registrado'));
        }
        else{
        if ($_POST['pass'] !== $_POST['reppass'] || $_POST['pass'] === ""  ||  $_POST['reppass'] === "") {
            echo json_encode(array('error' => 1, 'mensaje' => ' no se creo'));
        } else {
            $sql = "INSERT INTO usuarios (correo, pass) VALUES ('" . $_POST['correo'] . "', MD5('" . $_POST['pass'] . "'))";
            $result = mysqli_query($con, $sql);
            if ($result) {
                echo json_encode(array('error' => 0));
            } else {
                echo json_encode(array('error' => 1, 'mensaje' => 'no se pudo'));
            }
        }
    };

        break;
    case 'nada':
        break;
}
