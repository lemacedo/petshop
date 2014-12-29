<?php

class Cachorro extends Animal{
	private $corPelo;

	public function __construct($nome, $idade, $raca, $dono, $corPelo){
		parent::__construct($nome,$idade,$raca,$dono);
		$this->corPelo = $corPelo;
	}

	public function getSom(){
		return 'Auauau';
	}

	public function dadosAnimal(){
		$dados = parent::dadosAnimal();
		$dados .= "<br/> Cor do Pelo: ". $this->corPelo;


		return $dados;
	}

}