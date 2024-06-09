<?php
require 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer(true);

try {
    // Configurações do servidor
    $mail->SMTPDebug = 2; 
    $mail->isSMTP();  
    $mail->CharSet = 'UTF-8'; 
    $mail->Host       = 'smtp.gmail.com'; // Atualizado para 'smtp.gmail.com'
    $mail->SMTPAuth   = true; 
    $mail->Username   = 'easyacess78@gmail.com'; 
    $mail->Password   = 'BRENOROLIM'; 
    $mail->SMTPSecure = 'tls'; 
    $mail->Port       = 587; 

    // Destinatários
    $mail->setFrom('easyacess78@gmail.com', 'Nome');
    $mail->addAddress('easyacess78@gmail.com', 'Equipe A'); 

    // Conteúdo
    $mail->isHTML(true); 
    $mail->Subject = 'Assunto do Email';
    $mail->Body    = 'Este é o corpo da mensagem em <b>HTML!</b>';
    $mail->AltBody = 'Este é o corpo da mensagem para clientes de e-mail não HTML';

    $mail->send();
    echo 'Mensagem enviada com sucesso';
} catch (Exception $e) {
    echo "Mensagem não pôde ser enviada. Erro: {$mail->ErrorInfo}";
}
?>
