<?php

abstract class Animal{
	protected $nome;
	protected $idade;
	protected $raca;
	protected $som;
	protected $idAnimal;
	protected $curado = 0;
	protected $dono;


	public function __construct($nome,$idade, $raca, $dono){
		$this->nome  	= $nome;
		$this->idade 	= $idade;
		$this->raca  	= $raca;
		$this->dono 	= $dono;
		$this->idAnimal = self::geraIdAnimal();
	}

	public function geraIdAnimal(){
		//Randomiza valores de 5 até 1000.
		return rand(5,1000);
	}

	public function estadoSaude(){
		if($this->curado == 0){
			return "Não Curado";
		}else{
			return "Curado";
		}
	}

	public function getNome(){
		return $this->nome;
	}

	public function getDono(){
		return $this->dono ;
	}

	public function setSaude($estado){
		if(is_int($estado) && $estado >= 0 && $estado <= 1){
			$this->curado = $estado;
			return true;
		}else{
			return false;
		}
	}

	public function __toString(){
		$this->nome;
	}

	public function dadosAnimal(){
		$dados =  "Nome: ". $this->nome;
		$dados .= "<br/> Idade: ". $this->idade;
		$dados .= "<br/> Raça: ". $this->raca;
		$dados .= "<br/> Id do Animal: ". $this->idAnimal;
		$dados .= "<br/> Estado de saúde: ". self::estadoSaude();
		$dados .= "<br/> Dono: ". self::getDono()->getNome();

		return $dados;
	}

}

