<?php

require_once 'libs/bcrypt/bcrypt.php';

class Admin_Model extends Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function login()
	{
		try {
            $connection = Service::openDb();
            $stmt = $connection->prepare("SELECT id, password FROM user WHERE username = :username AND admin = 1");
            
            $stmt->execute(array(
            	'username' => $this->test_input_login($_POST['username']))
            );

            $count = $stmt->rowCount();

            if($count == 1)
            {
            	$user = $stmt->fetch();

            	if(Bcrypt::check($this->test_input_login($_POST['password']), $user['password']))
				{
					return true;
				}
            }

            return false;


        } catch (PDOException $e) {
            $this->writeLog($e->getMessage());
            return false;
        } finally{
            Service::closeDb();
        }
	}

	public function getVestibulinhoVariables()
	{
		try {
            $connection = Service::openDb();
            $stmt = $connection->prepare("SELECT nome, status FROM vestibulinho_variables");
            
            $stmt->execute(array());

            $array = $stmt->fetchAll();

            $resultado=array();

            foreach ($array as $value) {
            	$resultado[$value['nome']] = $value['status'];
            }

            return $resultado;


        } catch (PDOException $e) {
            $this->writeLog($e->getMessage());
            return false;
        } finally{
            Service::closeDb();
        }
	}

	public function vestibulinhoCasd($status)
	{
		try {
            $connection = Service::openDb();
            if($status)
            {
                $sth = $connection->prepare("SELECT COUNT(*) FROM information_schema.tables WHERE table_schema = '".DB_NAME."' AND table_name = 'vestibulinho_casd_".strval(date('Y')+1)."';");
                $sth->execute();

                if(!$sth->fetchColumn())
                {
                    $sth1 = $connection->prepare("CREATE TABLE vestibulinho_casd_".date('Y')." SELECT * FROM vestibulinho_casd_2018 WHERE 1=0");
                    $sth1->execute();
                }
            }

            $stmt = $connection->prepare("UPDATE vestibulinho_variables SET status = :status, last_change = CURRENT_TIMESTAMP WHERE nome = 'status_vestibulinho_casd'");
            
            $stmt->execute(array(
            	':status' => $status
            	));

            if($status)
            {
                $stmt1 = $connection->prepare("UPDATE vestibulinho_variables SET last_change = :data WHERE nome = 'data_vestibulinho_casd'");
                
                $stmt1->execute(array(
                    ':data' => date('Y-m-d H:i:s', strtotime(str_replace('/', '-', $_POST['date_vestibulinho_casd'])))
                    ));

                $stmt2 = $connection->prepare("UPDATE vestibulinho_variables SET status = :local WHERE nome = 'local_vestibulinho_casd'");
                
                $stmt2->execute(array(
                    ':local' => $_POST['local_vestibulinho_casd']
                    ));

                $stmt3 = $connection->prepare("UPDATE vestibulinho_variables SET last_change = :data WHERE nome = 'termino_vestibulinho_casd'");
                
                $stmt3->execute(array(
                    ':data' => date('Y-m-d H:i:s', strtotime(str_replace('/', '-', $_POST['termino_vestibulinho_casd'])))
                    ));
            }

            return true;


        } catch (PDOException $e) {
            $this->writeLog($e->getMessage());
            return false;
        } finally{
            Service::closeDb();
        }
	}

	public function consultaCasd($status)
	{
		try {
            $connection = Service::openDb();
            $stmt = $connection->prepare("UPDATE vestibulinho_variables SET status = :status, last_change = CURRENT_TIMESTAMP WHERE nome = 'consulta_vestibulinho_casd'");
            
            $stmt->execute(array(
            	':status' => $status
            	));

            return true;


        } catch (PDOException $e) {
            $this->writeLog($e->getMessage());
            return false;
        } finally{
            Service::closeDb();
        }
	}

	public function vestibulinhoCasdinho($status)
    {
        try {
            $connection = Service::openDb();
            if($status)
            {
                $sth = $connection->prepare("SELECT COUNT(*) FROM information_schema.tables WHERE table_schema = '".DB_NAME."' AND table_name = 'vestibulinho_casdinho_".strval(date('Y')+1)."';");
                $sth->execute();

                if(!$sth->fetchColumn())
                {
                    $sth1 = $connection->prepare("CREATE TABLE vestibulinho_casdinho_".date('Y')." SELECT * FROM vestibulinho_casdinho_2018 WHERE 1=0");
                    $sth1->execute();
                }
            }

            $stmt = $connection->prepare("UPDATE vestibulinho_variables SET status = :status, last_change = CURRENT_TIMESTAMP WHERE nome = 'status_vestibulinho_casdinho'");
            
            $stmt->execute(array(
                ':status' => $status
                ));

            if($status)
            {
                $stmt1 = $connection->prepare("UPDATE vestibulinho_variables SET last_change = :data WHERE nome = 'data_vestibulinho_casdinho'");
                
                $stmt1->execute(array(
                    ':data' => date('Y-m-d H:i:s', strtotime(str_replace('/', '-', $_POST['date_vestibulinho_casdinho'])))
                    ));

                $stmt2 = $connection->prepare("UPDATE vestibulinho_variables SET status = :local WHERE nome = 'local_vestibulinho_casdinho'");
                
                $stmt2->execute(array(
                    ':local' => $_POST['local_vestibulinho_casdinho']
                    ));

                $stmt3 = $connection->prepare("UPDATE vestibulinho_variables SET last_change = :data WHERE nome = 'termino_vestibulinho_casdinho'");
                
                $stmt3->execute(array(
                    ':data' => date('Y-m-d H:i:s', strtotime(str_replace('/', '-', $_POST['termino_vestibulinho_casdinho'])))
                    ));
            }

            return true;


        } catch (PDOException $e) {
            $this->writeLog($e->getMessage());
            return false;
        } finally{
            Service::closeDb();
        }
    }

	public function consultaCasdinho($status)
	{
		try {
            $connection = Service::openDb();
            $stmt = $connection->prepare("UPDATE vestibulinho_variables SET status = :status, last_change = CURRENT_TIMESTAMP WHERE nome = 'consulta_vestibulinho_casdinho'");
            
            $stmt->execute(array(
            	':status' => $status
            	));

            return true;


        } catch (PDOException $e) {
            $this->writeLog($e->getMessage());
            return false;
        } finally{
            Service::closeDb();
        }
	}

    public function exportVestibulinhoCasd()
    {
        try {
            $connection = Service::openDb();
            $stmt = $connection->prepare("SELECT * FROM vestibulinho_casd_".strval(date('Y')+1));
            
            $stmt->execute();

            $resultado = $stmt->fetchAll();

            return $resultado;


        } catch (PDOException $e) {
            $this->writeLog($e->getMessage());
            return false;
        } finally{
            Service::closeDb();
        }
    }

    public function exportVestibulinhoCasdinho()
    {
        try {
            $connection = Service::openDb();
            $stmt = $connection->prepare("SELECT * FROM vestibulinho_casdinho_".strval(date('Y')+1));
            
            $stmt->execute();

            $resultado = $stmt->fetchAll();

            return $resultado;


        } catch (PDOException $e) {
            $this->writeLog($e->getMessage());
            return false;
        } finally{
            Service::closeDb();
        }
    }


}

?>