<?php

class Cliente{
	public $nome;
	protected $telefone;
	protected $animal = array();

	public function __construct($nome,$telefone){
		$this->nome 	= $nome;
		$this->telefone = self::formaTelefone($telefone);
	}

	public function setAnimal($animal){
		$this->animal[] = $animal;
	}

	public function getAnimais(){
		$nome = "";
		foreach ($this->animal as $nomeAnimal){
			$nome .= $nomeAnimal->getNome() .", ";
		}

		return $nome;
	}

	public function getNome(){
		$this->nome;
	}

	//Para retornar o nome corretamento quando é chamado a função getDono() retorna o nome do dono
	public function __toString(){
		$this->nome;
	}



	public function formaTelefone($num){
		$this->telefone = preg_replace('/[^0-9]/','', $num);
		$this->telefone = (string)$this->telefone;
		$formata = '(';
		$formata .= substr($this->telefone,0,2) . ') ';
		$formata .= substr($this->telefone,2,4) . '-';
		$formata .= substr($this->telefone,6,8);
		
		return $formata;
	}

	public function dadosCliente(){
		$dados = "<br/> Nome: ". $this->nome;
		$dados .= "<br/> Telefone: ". $this->telefone;
		$dados .= "<br/> Animal(is): ". self::getAnimais();

		return $dados;
	}

}