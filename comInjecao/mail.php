<?php



class SmtpEmail
{
    private $smtpServer;
    
    public function __construct($smtpServer)
    {
        $this->smtpServer = $smtpServer;
    }

    public function send($to, $subject, $body)
    {
        echo "Email enviado com sucesso<br>";

    }

    public function retornaServidor()
    {
        echo "Enviado pelo servidor: ".$this->smtpServer;

    }



}

class User
{
    private $nome;
    private $email;
    private $smtpEmail;

     function __construct(SmtpEmail $smtpEmail, $nome, $email){
        
        $this->nome= $nome;
        $this->email = $email;
        $this->smtpEmail = $smtpEmail;


    }

    public function sendMail($subject, $body)
    {

        $this->smtpEmail->send($this->email, $subject, $body);
        $this->smtpEmail->retornaServidor();
    }

}

$smtpUOL = new SmtpEmail("uol.smtp.com.br");
$usuario = new User($smtpUOL, "Joao", "joao@uol.com");
$usuario->sendMail("diogo", "olá indo email");


