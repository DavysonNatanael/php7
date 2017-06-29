<?php 

require_once("config.php");

use Cliente\Cadastro;

$cad = new Cadastro();

$cad->setNome("Davyson Sindeaux");
$cad->setEmail("davyson@sindeaux.com");
$cad->setSenha("123456");

foreach ($cad->exibir() as $value) {
	echo $value."<br>";
}

$cad->registrarVenda();

?>