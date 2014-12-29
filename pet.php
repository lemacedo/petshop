<?php  header ('Content-type: text/html; charset=UTF-8');

	require_once "animal.class.php";
	require_once "cachorro.class.php";
	require_once "passarinho.class.php";
	require_once "cliente.class.php";


	$ana = new Cliente('Ana','1535331245');
	$maria = new Cliente('Maria','1535313434');

	$dog  = new Cachorro('Rex', 4, 'Labrador' ,$ana->nome ,'Amarelo');
	$dog2 = new Cachorro('Vira',6,'Vira-Lata', $ana->nome, 'preto');
	$dog3 = new Cachorro('Box',2, 'Pitbull', $maria->nome, 'preta');
	$pass = new Passarinho('Linho', 1, 'Papagaio', $maria->nome, 0.4, 30);

	//associa animal para dono
	$ana->setAnimal($dog);
	$ana->setAnimal($dog2);
	$maria->setAnimal($dog3);
	$maria->setAnimal($pass);

	$dog->setSaude(1);
	$pass->setSaude(1);

	echo "<h3> Dados Dono dos  Animais </h3>";
	echo $ana->dadosCliente() ."<p>";
	echo "<p/>".$maria->dadosCliente();

	echo "<h3> Dados de Cada Animal </h3>";
	echo $dog->dadosAnimal() ."<p>";
	echo "<p/>". $dog2->dadosAnimal() ."<p>";
	echo "<p/>". $pass->dadosAnimal();








