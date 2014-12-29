<?php

class Passarinho extends Animal{
	private $tamanhoAsa;
	private $alturaVoo;

	public function __construct($nome,$idade, $raca, $dono, $tamanhoAsa,$alturaVoo){
		parent::__construct($nome,$idade,$raca, $dono);
		$this->tamanhoAsa = $tamanhoAsa;
		$this->alturaVoo  = $alturaVoo;
	}

	public function getSom(){
		return "piu piu";
	}

	public function dadosAnimal(){ 
		$dados =  parent::dadosAnimal();
		$dados .= "<br/> Tamanho das Asas : ". $this->tamanhoAsa ." (m) ";
		$dados .= "<br/> Altura de Voo: ". $this->alturaVoo ." (m) ";

		return $dados;
	}

}