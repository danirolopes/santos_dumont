<?php


class Error extends Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->view->controller = 'error';
	}

	function index()
	{
		$this->view->render('error/index', true);
	}

}

?>