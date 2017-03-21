<?php
    require("Conexao.php");
    class Cidade{
        private $codigo = [];
        private $uf = [];
        private $descricao = [];
        
         public function __construct($uf){
            $c = new Conexao;
            
            
            $sql = "SELECT C.*
                        FROM		BaseCep.dbo.uf		E
                        INNER JOIN	BaseCep.dbo.cidade	C ON E.uf_codigo = C.uf_codigo
                        WHERE E.uf_sigla = '".$uf."' or '".$uf."' = '' ";
            $result = $c->query($sql);
            
            if($result) {
                do {
                    $this->codigo[] = $c->field('cidade_codigo');
                    $this->uf[] = $c->field('uf_codigo');
                    $this->descricao[] = $c->field('cidade_descricao');              
                } while(odbc_fetch_row($result));
            }
            odbc_free_result($result);
        }

        public function getCodigo(){
            return $this->codigo;
        }

        public function getUf(){
            return $this->uf;
        }

        public function getDescricao(){
            return $this->descricao;
        }

        public function setCodigo($codigo){
            $this->codigo = $codigo;
        }

        public function setUf($uf){
            $this->uf = $uf;
        }

        public function setDescricao($descricao){
            $this->descricao = $descricao;
        }
    }
?>