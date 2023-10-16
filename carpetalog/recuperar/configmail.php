<?php
use PHPMailer\PHPMailer\PHPMailer;

require '../../PHPMailer/Exception.php';
require '../../PHPMailer/PHPMailer.php';
require '../../PHPMailer/SMTP.php';
$mail= new PHPMailer(); 
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com'; 
$mail->SMTPAuth = true;
$mail->Username = 'kiarayoselinventuradiaz@gmail.com';
$mail->Password = 'dtlguknztwuyclbh';
$mail->SMTPSecure = 'tls';
$mail->Port = 587;

$mail->setFrom('kiarayoselinventuradiaz@gmail.com', 'PorLaNacion');
$mail->addAddress($email);

$mail->Subject = 'Código de recuperación';
$mail->Body = 'El codigo que debes ingresar es: '.$token;

if ($mail->send()) {
    echo json_encode(array('error' => 0, 'mensaje' => 'codigo enviado'));
} else {
    echo json_encode(array('error' => 1, 'mensaje' => 'error'));
}

?>