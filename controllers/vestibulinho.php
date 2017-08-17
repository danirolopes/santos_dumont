<?php


class Vestibulinho extends Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->view->controller = 'vestibulinho';
	}


	function index()
	{
		$variables = $this->model->getVestibulinhoVariables();
		if($variables)
		{
			$this->view->variables = $variables;
		}
		else
		{
			$this->view->variables = false;
		}
		
		$this->view->render('vestibulinho/index');
	}


	function casd($erroNaInscricao = false)
	{
		if(!$this->model->isVestibulinhoCasd())
		{
			Controller::redirect(VESTIBULINHO_LINK);
		}

		Session::init();
		if (!Session::get('token-vestibulinho'))
		{    
			Session::set('token-vestibulinho', md5(uniqid(rand(), TRUE)));
		}
		Session::set('vestibulinho-submited', false);

		$this->view->escolas = $this->model->getEscolasCasd();
		$this->view->infos = $this->model->getInfosVestibulinhoCasd();
		$this->view->erro = $erroNaInscricao;


		$this->view->render('vestibulinho/casd');
	}

	function casdinho($erroNaInscricao = false)
	{
		if(!$this->model->isVestibulinhoCasdinho())
		{
			Controller::redirect(VESTIBULINHO_LINK);
		}

		Session::init();
		if (!Session::get('token-vestibulinho-casdinho'))
		{    
			Session::set('token-vestibulinho-casdinho', md5(uniqid(rand(), TRUE)));
		}
		Session::set('vestibulinho-casdinho-submited', false);

		$this->view->escolas = $this->model->getEscolasCasdinho();
		$this->view->infos = $this->model->getInfosVestibulinhoCasdinho();
		$this->view->erro = $erroNaInscricao;


		$this->view->render('vestibulinho/casdinho');
	}

	/*function checkdata_casd()
	{
		if(!$this->model->isVestibulinhoCasd())
		{
			Controller::redirect(VESTIBULINHO_LINK);
		}
		else
		{
			if($_SERVER['REQUEST_METHOD'] != 'POST')
			{
				Controller::redirect(VESTIBULINHO_CASD_LINK);
			}
			else 
			{	
				Session::init();
				if(isset($_POST['token-vestibulinho']))
				{
					if($_POST['token-vestibulinho'] != Session::get('token-vestibulinho') || Session::get('token-vestibulinho') === false)
					{
						Controller::redirect(VESTIBULINHO_CASD_LINK);
					}
					else
					{
						if(!Session::get('vestibulinho-submited'))
						{
							if(isset($_POST['responsavel']))
							{
								$this->view->responsavel = true;
							}
							else
							{
								$this->view->responsavel = false;	
							}
							if(isset($_POST['parentesco']))
							{
								$this->view->parentesco = true;
							}
							else
							{
								$this->view->parentesco = false;	
							}
							if(isset($_POST['telefone2']))
							{
								$this->view->telefone2 = true;
							}
							else
							{
								$this->view->telefone2 = false;	
							}
							if(isset($_POST['necessidade']) && $_POST['necessidade'] !=='')
							{
								$this->view->necessidade = true;
							}
							else
							{
								$this->view->necessidade = false;	
							}

							$this->view->render('vestibulinho/checkdata_casd');
						}
						else
						{
							Contoller::redirect(VESTIBULINHO_CASD_LINK);
						}
					}
				}
				else
				{
					Controller::redirect(VESTIBULINHO_CASD_LINK);					
				}
			}
		}
	}*/


	function confirmacao_casd()
	{
		if(!$this->model->isVestibulinhoCasd())
		{
			Controller::redirect(VESTIBULINHO_LINK);
		}
		else
		{
			if($_SERVER['REQUEST_METHOD'] != 'POST')
			{
				Controller::redirect(VESTIBULINHO_CASD_LINK);
			}
			else 
			{	
				Session::init();
				if(!Session::get('vestibulinho-submited'))
				{
					if(isset($_POST['token-vestibulinho']))
					{
						if($_POST['token-vestibulinho'] != Session::get('token-vestibulinho') || Session::get('token-vestibulinho') === false)
						{
							Controller::redirect(VESTIBULINHO_CASD_LINK);						
						}
						else
						{
							Session::set('vestibulinho-submited', true);
							$sucesso = $this->model->inscreveVestibulinhoCasd();
						}
					}
					else
					{
						Controller::redirect(VESTIBULINHO_CASD_LINK);
					}
				}
				else
				{
					Controller::redirect(VESTIBULINHO_CASD_LINK);
				}
			}
			if ($sucesso)
			{
				$this->view->cartao = $this->model->getConfirmacaoCasd();
				$this->view->infos = $this->model->getInfosVestibulinhoCasd();
				$this->view->render('vestibulinho/confirmacao_casd');
			}
			else
			{
				Controller::redirect(VESTIBULINHO_CASD_LINK.'/error');
			}
		}
	}

	function confirmacao_casdinho()
	{
		if(!$this->model->isVestibulinhoCasdinho())
		{
			Controller::redirect(VESTIBULINHO_LINK);
		}
		else
		{
			if($_SERVER['REQUEST_METHOD'] != 'POST')
			{
				Controller::redirect(VESTIBULINHO_CASDINHO_LINK);
			}
			else 
			{	
				Session::init();
				if(!Session::get('vestibulinho-casdinho-submited'))
				{
					if(isset($_POST['token-vestibulinho-casdinho']))
					{
						if($_POST['token-vestibulinho-casdinho'] != Session::get('token-vestibulinho-casdinho') || Session::get('token-vestibulinho-casdinho') === false)
						{
							Controller::redirect(VESTIBULINHO_CASDINHO_LINK);
						}
						else
						{
							Session::set('vestibulinho-casdinho-submited', true);
							$sucesso = $this->model->inscreveVestibulinhoCasdinho();
						}
					}
					else
					{
						Controller::redirect(VESTIBULINHO_CASDINHO_LINK);
					}
				}
				else
				{
					Controller::redirect(VESTIBULINHO_CASDINHO_LINK);
				}
			}
			if ($sucesso)
			{
				$this->view->cartao = $this->model->getConfirmacaoCasdinho();
				$this->view->infos = $this->model->getInfosVestibulinhoCasdinho();
				$this->view->render('vestibulinho/confirmacao_casdinho');
			}
			else
			{
				Controller::redirect(VESTIBULINHO_CASDINHO_LINK.'/error');
			}
		}
	}


	function consulta_casd()
	{
		if(!$this->model->isConsultaCasd())
		{
			Controller::redirect(VESTIBULINHO_LINK);
		}
		else 
		{
			Session::init();
			if (!Session::get('token-consulta'))
			{    
				Session::set('token-consulta', md5(uniqid(rand(), TRUE)));
			}

			if($_SERVER['REQUEST_METHOD'] == 'POST')
			{
				if($_POST['token-consulta'] == Session::get('token-consulta'))
				{
					$this->view->cartao = $this->model->getConfirmacaoCasd();

					$this->view->infos = $this->model->getInfosVestibulinhoCasd();
				}			
			}

			$this->view->render('vestibulinho/consulta_casd');
		}
	}

	function consulta_casdinho()
	{
		if(!$this->model->isConsultaCasdinho())
		{
			Controller::redirect(VESTIBULINHO_LINK);
		}
		else 
		{
			Session::init();
			if (!Session::get('token-consulta-casdinho'))
			{    
				Session::set('token-consulta-casdinho', md5(uniqid(rand(), TRUE)));
			}

			if($_SERVER['REQUEST_METHOD'] == 'POST')
			{
				if($_POST['token-consulta-casdinho'] == Session::get('token-consulta-casdinho'))
				{
					$this->view->cartao = $this->model->getConfirmacaoCasdinho();

					$this->view->infos = $this->model->getInfosVestibulinhoCasdinho();
				}			
			}

			$this->view->render('vestibulinho/consulta_casdinho');
		}
	}

	function downloadEditalCasd()
	{
		if(!$this->model->isVestibulinhoCasd())
		{
			Controller::redirect(VESTIBULINHO_LINK);
		}
		$this->downloadFile('edital_casd');
	}

	function downloadEditalCasdinho()
	{
		if(!$this->model->isVestibulinhoCasdinho())
		{
			Controller::redirect(VESTIBULINHO_LINK);
		}
		$this->downloadFile('edital_casdinho');
	}

	function provasCasd()
	{
		$this->view->files = $this->getFilesFromFolder('files/vestibulinho_casd');
		$this->view->prova = 'Casd';
		$this->view->render('vestibulinho/provas');
	}

	function provasCasdinho()
	{
		$this->view->files = $this->getFilesFromFolder('files/vestibulinho_casdinho');
		$this->view->prova = 'Casdinho';
		$this->view->render('vestibulinho/provas');
	}

	function downloadCasd($arquivo = false)
	{
		if ($arquivo === false)
		{
			Controller::redirect(VESTIBULINHO_CASD_PROVAS_LINK);
		}
		$this->downloadFile(htmlspecialchars($arquivo), 'vestibulinho_casd');
	}

	function downloadCasdinho($arquivo = false)
	{
		if ($arquivo === false)
		{
			Controller::redirect(VESTIBULINHO_CASDINHO_PROVAS_LINK);
		}
		$this->downloadFile(htmlspecialchars($arquivo), 'vestibulinho_casdinho');
	}

	function contact()
	{
		$this->sendMailContact();
		Controller::redirect(INDEX_LINK);		
	}
}
?>