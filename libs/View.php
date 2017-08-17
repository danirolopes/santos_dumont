<?php

class View
{
	
	function __construct()
	{
	}
	
	public function render($name, $noInclude = false, $onDashboard = false)
	{
		if($noInclude == true)
		{
			require_once 'views/head.php';
			require_once 'views/'.$name.'.php';
			require_once 'views/foot.php';			
		}
		else if($onDashboard == true)
		{
			require_once 'views/head.php';
			require_once 'views/templates/header_dashboard.php';
			require_once 'views/'.$name.'.php';
			require_once 'views/foot.php';		
		}
		else
		{
			require_once 'views/head.php';
			require_once 'views/templates/header.php';
			require_once 'views/'.$name.'.php';
			require_once 'views/templates/footer.php';
			require_once 'views/foot.php';		
		}
	}
}

?>