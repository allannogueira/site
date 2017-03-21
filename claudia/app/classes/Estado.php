<?php    
    require("Conexao.php");
    class Estado{
        private $codigo = [];
        private $sigla = [];
        private $descricao = [];

        public function __construct(){
            $c = new Conexao;
            $sql = "SELECT * FROM BaseCep.dbo.uf ORDER BY uf_sigla";
            $result = $c->query($sql);
            if($result) {
                do {
                    $this->codigo[] = $c->field('uf_codigo');
                    $this->sigla[] = $c->field('uf_sigla');
                    $this->descricao[] = $c->field('uf_descricao');              
                } while(odbc_fetch_row($result));
            }
            odbc_free_result($result);
        }

        public function getCodigo(){
            return $this->codigo;
        }

        public function getSigla(){
            return $this->sigla;
        }

        public function setSigla($sigla){
            $this->sigla = $sigla;
        }

        public function getDescricao(){
            return $this->descricao;
        }

        public function setDescricao($descricao){
            $this->descricao = $descricao;
        }
    }
?>