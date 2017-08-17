<?php


class Doador extends Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->view->controller = 'doador';
	}

	function index()
	{
		$this->view->render('doador/index');
	}

	function contact()
	{
		$this->sendMailContact();
		Controller::redirect(DOADOR_LINK);		
	}

	function pagSeguro()
	{
		$quantia = floatval($_POST['quantia']);

		if (0 < $quantia && $quantia <= 5)
		{
			$url = 'http://tinyurl.com/dumont5';
		}
		else if (5 < $quantia && $quantia < 70)
		{
			if (fmod($quantia, 5) < 2)
			{
				$quantia = $quantia - fmod($quantia, 5);
			}
			else
			{
				$quantia = $quantia - fmod($quantia, 5) + 5;
			}
			$url = 'http://tinyurl.com/dumont'.$quantia;
		}
		else if($quantia < 80)
		{
			$url = 'http://tinyurl.com/dumont70';
		}
		else if($quantia < 110)
		{
			$url = 'http://tinyurl.com/dumont100';
		}
		else if ($quantia < 130) 
		{
			$url = 'http://tinyurl.com/dumont125';
		}
		else if($quantia < 160)
		{
			$url = 'http://tinyurl.com/dumont150';
		}
		else if($quantia < 180)
		{
			$url = 'http://tinyurl.com/dumont175';
		}
		else if($quantia < 220)
		{
			$url = 'http://tinyurl.com/dumont200';
		}
		else if($quantia < 270)
		{
			$url = 'http://tinyurl.com/dumont250';
		}
		else if ($quantia < 1000000)
		{
			$url = 'http://tinyurl.com/dumont300';
		}
		else
		{
			$url = DOADOR_LINK;
		}
		Controller::redirect($url);
	}
}
?>