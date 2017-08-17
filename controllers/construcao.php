<?php


class Construcao extends Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->view->controller = 'construcao';
	}

	function index()
	{
		$this->view->render('construcao/index');
	}

	function contact()
	{
		$this->sendMailContact();

		Controller::redirect(INDEX_LINK);		
	}
}
?>