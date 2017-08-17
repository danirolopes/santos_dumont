<?php


class Vestibulinho_Model extends Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function inscreveVestibulinhoCasd()
	{
		try {
            $connection = Service::openDb();
            $stmt = $connection->prepare("INSERT INTO vestibulinho_casd_".strval(date('Y')+1)." (nome, sobrenome, RG, CPF, sexo, nascimento, responsavel, parentesco, telefone1, telefone2, email, cep, endereco, numero, bairro, cidade, estado, necessidade, escolaridade, tipo_escola, nome_escola, trabalha, internet, ex_aluno, facebook, cor) VALUES (:nome, :sobrenome, :RG, :CPF, :sexo, :nascimento, :responsavel, :parentesco, :telefone1, :telefone2, :email, :cep, :endereco, :numero, :bairro, :cidade, :estado, :necessidade, :escolaridade, :tipo_escola, :nome_escola, :trabalha, :internet, :ex_aluno, :facebook, :cor)");
            
            $stmt->execute(array(
			':nome' => $this->test_input($_POST['nome']),
			':sobrenome' => $this->test_input($_POST['sobrenome']),
			':RG' => $this->test_input($_POST['RG']),
			':CPF' => $this->test_input($_POST['CPF']),
			':sexo' => $this->test_input($_POST['sexo']),
			':nascimento' => $this->test_input($_POST['nascimento']),
			':responsavel' => $this->test_input($_POST['responsavel']),
			':parentesco' => $this->test_input($_POST['parentesco']),
			':telefone1' => $this->test_input($_POST['telefone1']),
			':telefone2' => $this->test_input($_POST['telefone2']),
			':email' => $this->test_input($_POST['email']),
			':cep' => $this->test_input($_POST['cep']),
			':endereco' => $this->test_input($_POST['rua']),
			':numero' => $this->test_input($_POST['numero']),
			':bairro' => $this->test_input($_POST['bairro']),
			':cidade' => $this->test_input($_POST['cidade']),
			':estado' => $this->test_input($_POST['estado']),
			':necessidade' => $this->test_input($_POST['necessidade']),
			':escolaridade' => $this->test_input($_POST['escolaridade']),
			':tipo_escola' => $this->test_input($_POST['tipoEscola']),
			':nome_escola' => $this->test_input($_POST['nomeEscola']),
			':trabalha' => $this->test_input($_POST['trabalha']),
			':internet' => $this->test_input($_POST['internet']),
			':ex_aluno' => $this->test_input($_POST['exAluno']),
			':facebook' => $this->test_input($_POST['facebook']),
			':cor' => $this->test_input($_POST['cor'])
			));

			return true;

        } catch (PDOException $e) {
            $this->writeLog($e->getMessage());
            return false;
        } finally{
            Service::closeDb();
        }
	}

    public function inscreveVestibulinhoCasdinho()
    {
        try {
            $connection = Service::openDb();
            $stmt = $connection->prepare("INSERT INTO vestibulinho_casdinho_".strval(date('Y')+1)." (nome, sobrenome, RG, CPF, sexo, nascimento, responsavel, parentesco, telefone1, telefone2, email, cep, endereco, numero, bairro, cidade, estado, necessidade, serie, tipo_escola, nome_escola, internet, conheceu, facebook, cor, automoveis, empregados, maquinas, banheiros, dvds, geladeiras, freezers, computadores, lavaloucas, microondas, motocicletas, secadoras, agua, pavimentacao, escolaridade_chefe) VALUES (:nome, :sobrenome, :RG, :CPF, :sexo, :nascimento, :responsavel, :parentesco, :telefone1, :telefone2, :email, :cep, :endereco, :numero, :bairro, :cidade, :estado, :necessidade, :serie, :tipo_escola, :nome_escola, :internet, :conheceu, :facebook, :cor, :automoveis, :empregados, :maquinas, :banheiros, :dvds, :geladeiras, :freezers, :computadores, :lavaloucas, :microondas, :motocicletas, :secadoras, :agua, :pavimentacao, :escolaridade_chefe)");
            
            $stmt->execute(array(
            ':nome' => $this->test_input($_POST['nome']),
            ':sobrenome' => $this->test_input($_POST['sobrenome']),
            ':RG' => $this->test_input($_POST['RG']),
            ':CPF' => $this->test_input($_POST['CPF']),
            ':sexo' => $this->test_input($_POST['sexo']),
            ':nascimento' => $this->test_input($_POST['nascimento']),
            ':responsavel' => $this->test_input($_POST['responsavel']),
            ':parentesco' => $this->test_input($_POST['parentesco']),
            ':telefone1' => $this->test_input($_POST['telefone1']),
            ':telefone2' => $this->test_input($_POST['telefone2']),
            ':email' => $this->test_input($_POST['email']),
            ':cep' => $this->test_input($_POST['cep']),
            ':endereco' => $this->test_input($_POST['rua']),
            ':numero' => $this->test_input($_POST['numero']),
            ':bairro' => $this->test_input($_POST['bairro']),
            ':cidade' => $this->test_input($_POST['cidade']),
            ':estado' => $this->test_input($_POST['estado']),
            ':necessidade' => $this->test_input($_POST['necessidade']),
            ':serie' => $this->test_input($_POST['serie']),
            ':tipo_escola' => $this->test_input($_POST['tipoEscola']),
            ':nome_escola' => $this->test_input($_POST['nomeEscola']),
            ':internet' => $this->test_input($_POST['internet']),
            ':conheceu' => $this->test_input($_POST['conheceu']),
            ':facebook' => $this->test_input($_POST['facebook']),
            ':cor' => $this->test_input($_POST['cor']),
            ':automoveis' => $this->test_input($_POST['automoveis']),
            ':empregados' => $this->test_input($_POST['empregados']),
            ':maquinas' => $this->test_input($_POST['maquinas']),
            ':banheiros' => $this->test_input($_POST['banheiros']),
            ':dvds' => $this->test_input($_POST['dvds']),
            ':geladeiras' => $this->test_input($_POST['geladeiras']),
            ':freezers' => $this->test_input($_POST['freezers']),
            ':computadores' => $this->test_input($_POST['computadores']),
            ':lavaloucas' => $this->test_input($_POST['lavaloucas']),
            ':microondas' => $this->test_input($_POST['microondas']),
            ':motocicletas' => $this->test_input($_POST['motocicletas']),
            ':secadoras' => $this->test_input($_POST['secadoras']),
            ':agua' => $this->test_input($_POST['agua']),
            ':pavimentacao' => $this->test_input($_POST['pavimentacao']),
            ':escolaridade_chefe' => $this->test_input($_POST['escolaridade_chefe'])
            ));

            return true;

        } catch (PDOException $e) {
            $this->writeLog($e->getMessage());
            return false;
        } finally{
            Service::closeDb();
        }
    }

	public function getConfirmacaoCasd()
	{
		try {
            $connection = Service::openDb();
            $stmt = $connection->prepare("SELECT id, nome, sobrenome, nascimento, RG, CPF FROM vestibulinho_casd_".strval(date('Y')+1)." WHERE CPF = :CPF AND nascimento = :nascimento ORDER BY id DESC");
            
            $stmt->execute( array(
            	':CPF' => $this->test_input($_POST['CPF']),
            	':nascimento' => $this->test_input($_POST['nascimento'])
            	));

            if($stmt->rowCount() > 0)
            {
	            $resultado = $stmt->fetch();

				return $resultado;
            }
            
            return false;

        } catch (PDOException $e) {
            $this->writeLog($e->getMessage());
            return false;
        } finally{
            Service::closeDb();
        }
	}

    public function getConfirmacaoCasdinho()
    {
        try {
            $connection = Service::openDb();
            $stmt = $connection->prepare("SELECT id, nome, sobrenome, nascimento, RG, CPF FROM vestibulinho_casdinho_".strval(date('Y')+1)." WHERE RG = :RG AND nascimento = :nascimento ORDER BY id DESC");
            
            $stmt->execute( array(
                ':RG' => $this->test_input($_POST['RG']),
                ':nascimento' => $this->test_input($_POST['nascimento'])
                ));

            if($stmt->rowCount() > 0)
            {
                $resultado = $stmt->fetch();

                return $resultado;
            }
            
            return false;

        } catch (PDOException $e) {
            $this->writeLog($e->getMessage());
            return false;
        } finally{
            Service::closeDb();
        }
    }

	public function isVestibulinhoCasd()
	{
		try {
            $connection = Service::openDb();
            $stmt = $connection->prepare("SELECT status FROM vestibulinho_variables WHERE nome = 'status_vestibulinho_casd' ");
            
            $stmt->execute();

            $resultado = $stmt->fetch();

			return $resultado['status'];

        } catch (PDOException $e) {
            $this->writeLog($e->getMessage());
            return false;
        } finally{
            Service::closeDb();
        }
	}

    public function isVestibulinhoCasdinho()
    {
        try {
            $connection = Service::openDb();
            $stmt = $connection->prepare("SELECT status FROM vestibulinho_variables WHERE nome = 'status_vestibulinho_casdinho' ");
            
            $stmt->execute();

            $resultado = $stmt->fetch();

            return $resultado['status'];

        } catch (PDOException $e) {
            $this->writeLog($e->getMessage());
            return false;
        } finally{
            Service::closeDb();
        }
    }

	public function isConsultaCasd()
	{
		try {
            $connection = Service::openDb();
            $stmt = $connection->prepare("SELECT status FROM vestibulinho_variables WHERE nome = 'consulta_vestibulinho_casd' ");
            
            $stmt->execute();

            $resultado = $stmt->fetch();

			return $resultado;

        } catch (PDOException $e) {
            $this->writeLog($e->getMessage());
            return false;
        } finally{
            Service::closeDb();
        }
	}

    public function isConsultaCasdinho()
    {
        try {
            $connection = Service::openDb();
            $stmt = $connection->prepare("SELECT status FROM vestibulinho_variables WHERE nome = 'consulta_vestibulinho_casdinho' ");
            
            $stmt->execute();

            $resultado = $stmt->fetch();

            return $resultado;

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

    public function getEscolasCasd()
    {
        try {
            $connection = Service::openDb();
            $stmt = $connection->prepare("SELECT id, nome FROM escolas_vestibulinho_casd");
            
            $stmt->execute(array());

            $array = $stmt->fetchAll();

            $resultado=array();

            foreach ($array as $value) {
                $resultado[$value['id']] = $value['nome'];
            }

            return $resultado;


        } catch (PDOException $e) {
            $this->writeLog($e->getMessage());
            return false;
        } finally{
            Service::closeDb();
        }
    }

    public function getEscolasCasdinho()
    {
        try {
            $connection = Service::openDb();
            $stmt = $connection->prepare("SELECT id, nome FROM escolas_vestibulinho_casdinho");
            
            $stmt->execute(array());

            $array = $stmt->fetchAll();

            $resultado=array();

            foreach ($array as $value) {
                $resultado[$value['id']] = $value['nome'];
            }

            return $resultado;


        } catch (PDOException $e) {
            $this->writeLog($e->getMessage());
            return false;
        } finally{
            Service::closeDb();
        }

    }


    public function getInfosVestibulinhoCasd()
    {
        try {
            $connection = Service::openDb();
            $stmt = $connection->prepare("SELECT * FROM vestibulinho_variables WHERE nome = 'data_vestibulinho_casd' OR nome = 'local_vestibulinho_casd' OR nome = 'termino_vestibulinho_casd'");
            
            $stmt->execute(array());

            $array = $stmt->fetchAll();

            $resultado=array();

            //Indexando o vetor resposta
            foreach ($array as $value) {
                if ($value['nome'] == 'local_vestibulinho_casd')
                    $resultado[$value['nome']] = $value['status'];
                else //Serve para data_vestibulinho e termino_vestibulinho
                {
                    //Formatando a data adequadamente
                    $resultado[$value['nome']] = date('d/m' ,strtotime($value['last_change']));
                }
            }
            return $resultado;

        } catch (PDOException $e) {
            $this->writeLog($e->getMessage());
            return false;
        } finally{
            Service::closeDb();
        }
    }

    public function getInfosVestibulinhoCasdinho()
    {
        try {
            $connection = Service::openDb();
            $stmt = $connection->prepare("SELECT * FROM vestibulinho_variables WHERE nome = 'data_vestibulinho_casdinho' OR nome = 'local_vestibulinho_casdinho' OR nome = 'termino_vestibulinho_casdinho'");
            
            $stmt->execute(array());

            $array = $stmt->fetchAll();

            $resultado=array();

            //Indexando o vetor resposta
            foreach ($array as $value) {
                if ($value['nome'] == 'local_vestibulinho_casdinho')
                    $resultado[$value['nome']] = $value['status'];
                else //Serve para data_vestibulinho e termino_vestibulinho
                {
                    //Formatando a data adequadamente
                    $resultado[$value['nome']] = date('d/m' ,strtotime($value['last_change']));
                }
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

?>