<?php
  require("../classes/Cidade.php");
  //PARAMETROS POST OU GET
  $uf = $_REQUEST['uf'];
  
  $obj = new Cidade($uf);
  $item = [];
  for($i = 0;$i < sizeof($obj->getCodigo()); $i++){
    
    $item[] = [
      "codigo" => $obj->getCodigo()[$i], 
      "uf" => $obj->getUf()[$i], 
      "descricao" => $obj->getDescricao()[$i]
    ];
     
  }

  echo json_encode($item);

?>