<?php


class Index extends Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->view->controller = 'index';
		$this->getFilesFromFolder(DOCUMENT_ROOT.'files/vestibulinho_casdinho');
	}

	function index()
	{
		$this->view->statusVestibulinho = $this->model->getVestibulinhoVariables();
		$this->view->render('index/index', true);
	}

	function contact()
	{
		$this->sendMailContact();
		Controller::redirect(INDEX_LINK);		
	}
}
?>