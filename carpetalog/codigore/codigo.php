<?php 
session_start(); 
include('../codigo.php');
$con = mysqli_connect(HOST, USER, PASSWORD, DB);
switch ($_POST['enviar']) {
    case 'comprobar':
        $codigo = $_POST["codigo"];
        $sql = "SELECT id FROM usuarios WHERE token = '$codigo'";
        $result = mysqli_query($con, $sql);
        if ($result && mysqli_num_rows($result) == 1) {
            echo json_encode(array('error' => 0));
            $arr=mysqli_fetch_assoc($result);
            $_SESSION['arr'] = $arr;
            $sql = "UPDATE usuarios SET token = null WHERE id ='$arr[id]'";
            $result = mysqli_query($con, $sql);
        } else {
            echo json_encode(array('error' => 1, 'mensaje' => 'codigo incorrecto'));
        }
        break;
    case 'nada':
        break;
}

?>