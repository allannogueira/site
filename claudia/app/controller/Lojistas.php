<?php
  require("../classes/Lojistas.php");
  //PARAMETROS POST OU GET
  $emissor = $_REQUEST['emissor'];
  $receptor = $_REQUEST['receptor'];
  $distribuidor = $_REQUEST['distribuidor'];
  $cidade = $_REQUEST['cidade'];
   
  $obj = new Lojista($emissor,$receptor,$distribuidor,$cidade);
  $item = [];
  
  for($i = 0;$i < sizeof($obj->getId()); $i++){    
    $item[] = [
      "id" => $obj->getId()[$i], 
      "nomeFantasia" => $obj->getNomeFantasia()[$i], 
      "rua" => $obj->getRua()[$i], 
      "complemento" => $obj->getComplemento()[$i], 
      "bairro" => $obj->getBairro()[$i], 
      "uf" => $obj->getUf()[$i], 
      "cidade" => $obj->getCidade()[$i],
      "cep" => $obj->getCep()[$i],
      "telefone" => $obj->getTelefone()[$i]
    ];     
  }

  echo json_encode($item);
?> 