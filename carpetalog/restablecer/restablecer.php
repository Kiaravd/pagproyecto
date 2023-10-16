<?php
session_start();
include('../codigo.php');
$con = mysqli_connect(HOST, USER, PASSWORD, DB);
switch ($_POST['enviar']) {
    case 'restablecer':
        if (isset($_SESSION['arr'])) {
            $arr = $_SESSION['arr'];
            $contra = md5($_POST["contraseña"]);
            $recontra = md5($_POST["recontraseña"]);
            if ($contra !== $recontra || $contra === ""  ||  $recontra === "") {
                echo json_encode(array('error' => 1, 'mensaje' => ' no se creo'));
            } else {
                $sql = "UPDATE usuarios SET pass = '$contra' WHERE id= '$arr[id]'";
                $result = mysqli_query($con, $sql);
                if ($result) {
                    echo json_encode(array('error' => 0));
                } else {
                    echo json_encode(array('error' => 1, 'mensaje' => 'no se pudo'));
                }
            }
        } else {
            echo "variable de sesión 'arr' no está definida.";
        }
       
        break;
    case 'nada':
        break;
}
?>