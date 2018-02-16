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
        echo "Email enviado com sucesso";

    }




}

class User
{
    private $nome;
    private $email;
    private $smtpEmail;

     function __construct($smtpServer, $nome, $email){
        $this->smtpEmail = new SmtpEmail($smtpServer);
        $this->nome= $nome;
        $this->email = $email;
        //echo($this->nome . "  " . $this->email);


    }

    public function sendMail($subject, $body)
    {

        $this->smtpEmail->send($this->email, $subject, $body);
    }

}

$usuario = new User("uol.smtp.com.br", "Joao", "joao@uol.com");
$usuario->sendMail("diogo", "olá indo email");


