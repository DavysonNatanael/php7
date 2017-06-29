<?php 

/**
* 
*/
abstract class Animal {
	
	function falar() {
		return "Fala";
	}

	function mover() {
		return "Anda";
	}

}

class Cachorro extends Animal {
	
	function falar() {
		return "Late";
	}

}

class Gato extends Animal {
	
	function falar() {
		return "Mia";
	}

}

class Passaro extends Animal {
	
	function falar() {
		return "Canta";
	}

	function mover() {
		return "Voa e " . parent::mover();
	}

}

$pluto = new Cachorro();

echo $pluto->falar() . "<br>";
echo $pluto->mover() . "<br>";

echo "------------------------<br>";

$felix = new Gato();

echo $felix->falar() . "<br>";
echo $felix->mover() . "<br>";

echo "------------------------<br>";

$piupiu = new Passaro();

echo $piupiu->falar() . "<br>";
echo $piupiu->mover() . "<br>";

?>