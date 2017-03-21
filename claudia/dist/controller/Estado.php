<?php
  require("../classes/Estado.php");
  $obj = new Estado();

  $item = [];
  for($i = 0;$i < sizeof($obj->getCodigo()); $i++){
    
    $item[] = [
      "codigo" => $obj->getCodigo()[$i], 
      "sigla" => $obj->getSigla()[$i], 
      "descricao" => $obj->getDescricao()[$i]
    ];
     
  }

  echo json_encode($item);
?>