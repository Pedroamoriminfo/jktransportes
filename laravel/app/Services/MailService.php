<?php

namespace App\Services;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class MailService
{
    public function enviarEmail($para, $assunto, $mensagemHtml, $mensagemTexto, $de , $nomeDe)
    {
        $mail = new PHPMailer(true);

        try {
            // Configurações do servidor SMTP
            $mail->isSMTP();
            $mail->Host = env('EMAIL_SERVER'); // Servidor SMTP
            $mail->SMTPAuth = true;
            $mail->Username = env('EMAIL_NAME'); // Seu usuário de e-mail
            $mail->Password = env('EMAIL_PASS'); // Sua senha de e-mail
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587; // Porta SMTP (use 465 se SSL for necessário)

            // Definir remetente e destinatário
            $mail->setFrom($de, $nomeDe);
            $mail->addAddress($para);

            // Configuração de formato e conteúdo
            $mail->isHTML(true);
            $mail->Subject = $assunto;
            $mail->Body = $mensagemHtml;
            $mail->AltBody = $mensagemTexto; // Mensagem alternativa para clientes que não suportam HTML

            $mail->send();
            return "E-mail enviado com sucesso!";
        } catch (Exception $e) {
            return "Erro ao enviar o e-mail: {$mail->ErrorInfo}";
        }
    }
}
