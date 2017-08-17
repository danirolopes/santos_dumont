<?php

require_once 'models/service.php';

abstract class Model
{
	
	function __construct()
	{
	}

	protected function writeLog($message){        
        file_put_contents('logs/pdo_errors_log.txt', date('g:i a - d/F/Y', time())." - ".$message."\n", FILE_APPEND);
    }
    
    protected function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      $data = mb_strtoupper($data);
      return $data;
    }

    protected function test_input_login($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
}

?>