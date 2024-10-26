<?php


namespace App\Http\Controllers;

use App\Services\MailService;
use Illuminate\Http\Request;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class HomeController extends Controller
{

    protected $mailService;

    public function __construct(MailService $mailService)
    {
        $this->mailService = $mailService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('site.index');
    }
    public function sobre()
    {
        return view('site.sobre');
    }
    public function servicos()
    {
        return view('site.servicos');
    }
    public function contato()
    {
        return view('site.contato');
    }
    public function reserva()
    {
        return view('site.reserva');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function reservaCreate(Request $request)
    {
        $mail = new PHPMailer(true);

        try {
            //Server settings
            $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       ='smtp.google.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   =  'amoriminformatica01@gmail.com';                    //SMTP username
            $mail->Password   = '@Asj20508';                           //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            //Recipients
            // $mail->setFrom('gracapersonalizadosrdo@gmail.com', 'Mailer');
            $mail->addAddress('drivedajo2020@gmail.com', 'Joe User');     //Add a recipient
            $mail->addAddress('gracapersonalizadosrdo@gmail.com', 'Joe User');     //Add a recipient
            // $mail->addAddress('ellen@example.com');               //Name is optional
            // $mail->addReplyTo('info@example.com', 'Information');
            // $mail->addCC('cc@example.com');
            // $mail->addBCC('bcc@example.com');

            //Attachments
            // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
            // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'Here is the subject';
            $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            $mail->send();
            echo 'Message has been sent';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
    /**
     * Show the form for creating a new resource.
     */
    public function contatoCreate(Request $request)
    {
        $de = $request->input('email');
        $nomeDe = $request->input('name');
        $para = env('EMAIL_NAME');
        $assunto = 'Assunto do E-mail';
        $mensagemHtml = '<h1>Olá!</h1><p>Esta é uma mensagem em HTML.</p>';
        $mensagemTexto = 'Olá! Esta é a mensagem em texto, caso o HTML não funcione.';

        $resultado = $this->mailService->enviarEmail($de, $nomeDe, $para, $assunto, $mensagemHtml, $mensagemTexto);
        return response()->json(['message' => $resultado]);
    }
}
