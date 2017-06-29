<?php 

/**
* 
*/
class Pessoa {
	
	public $nome = "Davyson Natanael";
	protected $idade = 21;
	private $senha = "123456";

	public function verDados() {
		echo $this->nome."<br>";
		echo $this->idade."<br>";
		echo $this->senha."<br>";
	}
}

/**
* 
*/
class Programador extends Pessoa {
	
}

$objeto = new Programador();

/*echo $objeto->nome;
echo $objeto->idade;
echo $objeto->senha;*/

$objeto->verDados();

?>