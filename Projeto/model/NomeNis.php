<?php
	require_once $_SERVER['DOCUMENT_ROOT'].'/config/conexao.php';

	/**
	 * Classe que contem os metodos para manipular a tabela nome_nis no banco de dados
	 */
	class NomeNis
	{
		private $conexao;
		private $table;
		
		/**
		 * Construtor da classe
	     *
	     * @return void
	     */
		public function __construct()
		{
			global $conexao;
			$this->conexao = $conexao;
			$this->table = "nome_nis";
		}

		public function getByNis($nis)
        {
            $sql = "SELECT *
                    FROM $this->table 
                    WHERE nis = :nis";
			$result = $this->conexao->prepare($sql);
			$result->bindParam(':nis', $nis, PDO::PARAM_STR);
            $result->execute();
            return $result->rowCount();
        }

		public function inserirNis($dados)
		{
			$sql = "INSERT INTO $this->table (nome, nis) VALUES (:nome, :nis);";
			$result = $this->conexao->prepare($sql);
			$result->bindParam(':nome', $dados['full-name'], PDO::PARAM_STR);
			$result->bindParam(':nis', $dados['nis'], PDO::PARAM_STR);
			
			return $result->execute();
		}

		public function getName($nis)
        {
            $sql = "SELECT *
                    FROM $this->table 
                    WHERE nis = :nis";
			$result = $this->conexao->prepare($sql);
			$result->bindParam(':nis', $nis, PDO::PARAM_STR);
            $result->execute();
            return $result->fetch(PDO::FETCH_ASSOC);
        }

	}
?>