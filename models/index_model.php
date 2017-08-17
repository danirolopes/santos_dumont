<?php


class Index_Model extends Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function getVestibulinhoVariables()
	{
		try {
            $connection = Service::openDb();
            $stmt = $connection->prepare("SELECT nome, status FROM vestibulinho_variables WHERE nome = 'status_vestibulinho_casd' OR nome = 'status_vestibulinho_casdinho'");
            
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
}