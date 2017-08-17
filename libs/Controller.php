<?php

class Controller
{
	
	function __construct()
	{
		$this->view = new View();
	}

	public function loadModel($name)
	{
		$path = 'models/'.$name.'_model.php';

		if(file_exists($path))
		{
			require $path;

			$modelName = $name.'_Model';
			$this->model = new $modelName();
		}
	}

    public function sendMailContact()
    {
        require_once 'models/mail.php';
        $email = new MailModel();
        
        $emailBody = 'Mensagem enviada por: '.$this->test_input($_POST['nome']).' - '.$this->test_input($_POST['email']).'<br/><br/>'.$this->test_input($_POST['mensagem']);
        $email->setSubject('Mensagem de Contato do Site');
        $email->setTo(array(EMAIL_MKT => 'Marketing'));
        $email->setText($emailBody);
        $email->setHtml($emailBody);
        $email->send();

        $email->registerMailContact($this->test_input($_POST['nome']), $this->test_input($_POST['email']), $this->test_input($_POST['mensagem']));
    }

    
    protected function redirect ($location) {
        header('Location: '.$location);
        exit;
    }

    protected function ifSignedInGoHome(){
    	Session::init();
        if(Session::get('loggedIn') == true){
            Controller::redirect(DASHBOARD_LINK);
        }
    }

    protected function ifNotSignedInGoSignIn(){
    	Session::init();
        if(Session::get('loggedIn')==false){
        	Session::destroy();
            Controller::redirect(LOGIN_LINK);
        }
    }

    protected function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }

    protected function getFilesFromFolder($folder_name)
    {
        $resposta = array();
        foreach (new DirectoryIterator($folder_name) as $file) {
          if ($file->isFile()) {
              $resposta[] = $file->getFilename();
          }
        }
        return $resposta;
    }

    protected function downloadFile($file_name, $path = '')
    {
        $path .= ($path)? '/' : '';
        $filename = DOCUMENT_ROOT.'files/'.$path.$file_name.'.pdf';

        $fileinfo = pathinfo($filename);
        $sendname = $fileinfo['filename'] . '.' . strtoupper($fileinfo['extension']);

        header('Content-Type: application/pdf');
        header("Content-Disposition: attachment; filename=\"$sendname\"");
        header('Content-Length: ' . filesize($filename));
        readfile($filename);

    }

    protected function uploadfile($pasta, $nome)
    {
        $uploaddir = DOCUMENT_ROOT.$pasta;
        $uploadfile = $uploaddir.$nome;
        if (move_uploaded_file($_FILES['arquivo']['tmp_name'], $uploadfile))
        {   
            return true;
        }
        return false;
    }
}

?>