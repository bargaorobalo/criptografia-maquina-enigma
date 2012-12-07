<?php
	//Mensagem para ser enviada para criptografar
    $mensagem = "mensagem para criptografar";

    //importa a classe de criptografia
    require_once('MaquinaEnigmaClass.php');
    //instancia o objeto da classe para chamar os métodos de criptografar/descriptografar
    $enigma = new MaquinaEnigma();

    // imprime o resultado da criptografia
    var_dump($criptografado = $enigma->criptografar($mensagem));

   	echo "<br>";//line break

   	//imprime o resultado da leitura do código criptografado
   	var_dump($enigma->descriptografar($criptografado));
?>