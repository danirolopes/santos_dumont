<?php


class Parceiro extends Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->view->controller = 'parceiro';
	}

	function index()
	{
		$this->view->render('parceiro/index');
	}

	function interesseParceiro()
	{
		require_once 'models/mail.php';
        $email = new MailModel();
        
        $emailBody = 'Mensagem enviada por: '.$_POST['nome'].' - '.$_POST['email'].' - '.$_POST['site'].' - '.$_POST['telefone'].'<br/><br/>Quero ser parceiro! Minha proposta é '.$_POST['mensagem'];
        $email->setSubject('Mensagem de Voluntário do Site');
        $email->setTo(array('danirolopes@gmail.com' => 'Marketing'));
        $email->setText($emailBody);
        $email->setHtml($emailBody);
        $email->send();

        $email->registerMailParceiro($_POST['nome'], $_POST['email'], $_POST['site'], $_POST['telefone'], $_POST['mensagem']);

        Controller::redirect(PARCEIRO_LINK);
	}

	function contact()
	{
		$this->sendMailContact();
		Controller::redirect(PARCEIRO_LINK);		
	}
}
?>