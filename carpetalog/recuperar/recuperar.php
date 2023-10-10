<?php 
include ('../codigo.php');
$con = mysqli_connect(HOST, USER, PASSWORD, DB);
switch ($_POST['enviar']) {
    case 'recuperar':
        $email = $_POST["email"];
        $sql = "SELECT * FROM usuarios WHERE correo = '$email' ";
        $result = mysqli_query($con, $sql);
        if ($result && mysqli_num_rows($result) == 1) {
            $mostrar = mysqli_fetch_array($result);
            $titulo = 'codigo de recuperacion';
            $mensaje= 'Este es su codigo de recuperacion: '. $mostrar['pass'];
            $correoequipo= "From: kiarayoselinventuradiaz@gmail.com";
            if(mail($email, $titulo, $mensaje, $correoequipo))
            {
            echo json_encode(array('error' => 0, 'mensaje' => 'codigo enviado'));
            }
            else 
            {
                echo json_encode(array('error' => 1, 'mensaje' => 'error'));
            }
        } 
        else 
        {
            echo json_encode(array('error' => 1, 'mensaje' => 'no existe en la DB'));
        }
        break;
    case 'nada':
        break;
}
?>