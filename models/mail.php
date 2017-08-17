<?php 

require_once 'libs/swiftmailer/lib/swift_required.php';

class MailModel extends Model{

    private $transport;
    private $mailer;
    private $message;

    private $attachment = false;

    private $subject;
    private $to;
    private $text;
    private $html;

    private $username = EMAIL_NOREPLY;
    private $password = SENHA_NOREPLY;
    private $from = EMAIL_NOREPLY;
    private $name = 'Santos Dumont';




    public function __construct(){
        $this->transport = Swift_SmtpTransport::newInstance('smtp.casdvest.org.br', 587)
        ->setUsername($this->username)
        ->setPassword($this->password);

        $this->mailer = Swift_Mailer::newInstance($this->transport);

        // Create the message
        $this->message = Swift_Message::newInstance();
    }

    public function send(){

        // Give the message a subject
        $this->message->setSubject($this->subject);

        // Set the From address with an associative array
        $this->message->setFrom(array($this->from => $this->name));

        // Set the To addresses with an associative array
        $this->message->setBcc($this->to);

        // Give it a body
        $this->message->setBody($this->text);

        if($this->attachment){
            $this->message->attach($this->attachment);
        }

        // And optionally an alternative body
        $this->message->addPart($this->html, 'text/html');

        $result = $this->mailer->send($this->message);
    }



    public function setSubject($subject){
        $this->subject = $subject;
    }

    public function setTo($to){
        $this->to = $to;
    }

    public function setText($text){
        $this->text = $text;
    }

    public function setHtml($html){
        $this->html = $html;
    }

    public function setAttachment($path){
        $this->attachment = Swift_Attachment::fromPath($path)->setDisposition('inline');
    }

    public function getMessage(){
        return $this->message;
    }

    public function registerMailContact($nome, $email, $message)
    {
        try {
            $connection = Service::openDb();
            $stmt = $connection->prepare("INSERT INTO contato (nome, email, mensagem) VALUES (:nome, :email, :mensagem)");
            
            $stmt->execute(array(':nome' => $nome, ':email' => $email, ':mensagem' => $message));

        } catch (PDOException $e) {
            $this->writeLog($e->getMessage());
            return false;
        } finally{
            Service::closeDb();
        }
    }

    public function registerMailVoluntario($nome, $email, $telefone, $interesse)
    {
        try {
            $connection = Service::openDb();
            $stmt = $connection->prepare("INSERT INTO interessevoluntario (nome, email, telefone, interesse) VALUES (:nome, :email, :telefone, :interesse)");
            
            $stmt->execute(array(':nome' => $nome, ':email' => $email, ':telefone' => $telefone, ':interesse' => $interesse));

        } catch (PDOException $e) {
            $this->writeLog($e->getMessage());
            return false;
        } finally{
            Service::closeDb();
        }
    }


    public function registerMailParceiro($nome, $email, $site, $telefone, $mensagem)
    {
        try {
            $connection = Service::openDb();
            $stmt = $connection->prepare("INSERT INTO interesseparceiro (nome, email, site, telefone, mensagem) VALUES (:nome, :email, :site, :telefone, :mensagem)");
            
            $stmt->execute(array(':nome' => $nome, ':email' => $email, ':site' => $site, ':telefone' => $telefone, ':mensagem' => $mensagem));

        } catch (PDOException $e) {
            $this->writeLog($e->getMessage());
            return false;
        } finally{
            Service::closeDb();
        }
    }
}

?>