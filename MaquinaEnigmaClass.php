<?php 
/**
* Classe de criptografia baseada no modelo de Arthur Scherbius
*
* O funcionamento da maquina de enigma se dá da troca de caracter
* por outro correspondente embaralhado.
* http://pt.wikipedia.org/wiki/Enigma_(m%C3%A1quina)
*
* @author Bargão Robalo <bargaorobalo@gmail.com>
* @since 06/12/2012
* @copyright Creative Commons Attribution-ShareAlike 3.0 Unported License CC by sa
*
*/
class MaquinaEnigma{
	
	function __construct(){
		$this->base 	= array("A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","W","V","X","Y","Z","0","1","2","3","4","5","6","7","8","9", " "
								);
		$this->enigma 	= array("B","E","K","F","D","J","L","1","W","P","U","2","Z","3","R","I","M","0","S","A","X","N","V","6","H","Q","5","C","T","O","G","9","Y","7"," ","4", "8"
								);
		$this->maxBase 		= count($this->base);
		$this->maxEnigma 	= count($this->enigma);
	}
	function criptografar($param){
		$param 		= str_split(strtoupper($param));
		$maxParam 	= count($param);
		
		$vetor 		= array();
		for ($i = 0; $i < $maxParam; $i++) { 
			for ($j = 0; $j < $this->maxBase; $j++) { 
				if($param[$i] == $this->base[$j]){
					$vetor[$i] =  $this->enigma[$j];
				}
			}
		 	
		 }
		return implode($vetor);
	}

	function descriptografar($param){
		$param 		= str_split(strtoupper($param));
		$maxParam 	= count($param);

		$vetor = array();
		for ($i = 0; $i < $maxParam; $i++) { 
			for ($j = 0; $j < $this->maxEnigma; $j++) { 
				if($param[$i] == $this->enigma[$j]){
					$vetor[$i] =  $this->base[$j];
				}
			}
		 	
		 }
		return implode($vetor);
	}
}
?>