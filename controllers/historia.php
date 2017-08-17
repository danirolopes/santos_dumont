<?php


class Historia extends Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->view->controller = 'historia';
	}

	function index()
	{
		$this->view->render('historia/index');
	}

	function contact()
	{
		$this->sendMailContact();

		Controller::redirect(HISTORIA_LINK);		
	}
}
?>