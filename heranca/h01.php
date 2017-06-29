<?php 

/**
* 
*/
class Documento {

	private $numero;

	public function getNumero() {
		return $this->numero;
	}

	public function setNumero($numero) {
		$this->numero = $numero;
	}

}

class CPF extends Documento {

	public function validar():bool {

		$numeroCPF = $this->getNumero();

		if($numeroCPF == "") {
			return false;
		} elseif (strlen($numeroCPF) != 11) {
			return false;
		} else {
			return true;
		}
	}

}

$doc = new CPF();

$doc->setNumero("03297681233");

var_dump($doc->validar());

?>