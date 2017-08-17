<?php


class Voluntario extends Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->view->controller = 'voluntario';
	}

	function index()
	{
		$this->view->render('voluntario/index');
	}

	function interesseVoluntario()
	{
		require_once 'models/mail.php';
        $email = new MailModel();
        
        $emailBody = 'Mensagem enviada por: '.$_POST['nome'].' - '.$_POST['email'].'<br/><br/>Quero ser '.$_POST['tipoVoluntario'].'. Meu telefone é '.$_POST['telefone'];
        $email->setSubject('Mensagem de Voluntário do Site');
        $email->setTo(array(EMAIL_MKT => 'Marketing'));
        $email->setText($emailBody);
        $email->setHtml($emailBody);
        $email->send();

        $email->registerMailVoluntario($_POST['nome'], $_POST['email'], $_POST['telefone'], $_POST['tipoVoluntario']);

        Controller::redirect(VOLUNTARIO_LINK);
	}

	function contact()
	{
		$this->sendMailContact();
		Controller::redirect(VOLUNTARIO_LINK);		
	}
}
?>