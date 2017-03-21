<?php
    class Conexao{
        private $conexao;
        private $resultQuery;
        public function __construct(){
            $this->conexao = odbc_connect("DDCRED","site","5M59TyPG");
            return $this->conexao;
            //$retorno = odbc_connect("DDCRED","sa","rob0010");            
        }   

        //faz o select
        public function query($sql){
            $this->resultQuery = odbc_exec($this->conexao,$sql);
            return  $this->resultQuery;
        }

        //retorna o campo consultado
        public function field($nome){
            return utf8_encode(odbc_result($this->resultQuery,$nome));
        }

        
    }
?>