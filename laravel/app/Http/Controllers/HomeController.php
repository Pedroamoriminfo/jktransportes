<?php


namespace App\Http\Controllers;
use App\Services\MailService;
use Illuminate\Http\Request;

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
        $de = $request->input('email');
        $nomeDe = $request->input('name');
        $para = env('EMAIL_NAME');
        $assunto = 'Assunto do E-mail';
        $mensagemHtml = '<h1>Olá!</h1><p>Esta é uma mensagem em HTML.</p>';
        $mensagemTexto = 'Olá! Esta é a mensagem em texto, caso o HTML não funcione.';

        $resultado = $this->mailService->enviarEmail($de, $nomeDe,$para, $assunto, $mensagemHtml, $mensagemTexto);
        return response()->json(['message' => $resultado]);
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

        $resultado = $this->mailService->enviarEmail($de, $nomeDe,$para, $assunto, $mensagemHtml, $mensagemTexto);
        return response()->json(['message' => $resultado]);
    }

}
