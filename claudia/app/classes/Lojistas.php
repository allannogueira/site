<?php
require("Conexao.php");
//Classe Lojista cartao cidadao emissor, receptor ou distribuidor
class Lojista{
    private $id;
    private $nomeFantasia;
    private $rua;
    private $complemento;
    private $bairro;
    private $uf;
    private $cidade;
    private $cep;
    private $telefone;

    public function __construct($emissor = 0,$receptor = 0,$distribuidor = 0, $cidade = ""){
        $c = new Conexao;
        $sql = "mb.consultaLojistas '".$emissor."','".$receptor."','".$distribuidor."','".$cidade."'";
        
        $result = $c->query($sql);
        if($result) {
            do {
                $this->id[] = $c->field('id');
                $this->nomeFantasia[] = $c->field('Nome_Fantasia');
                $this->rua[] = $c->field('End_Fil');
                $this->complemento[] = $c->field('Compl_Fil');
                $this->bairro[] = $c->field('Bairro_Fil');
                $this->uf[] = $c->field('UF_Fil');
                $this->cidade[] = $c->field('Cidade_Fil');
                $this->cep[] = $c->field('Cep_Fil');
                $this->telefone[] = $c->field('Fone_Fil');              
            } while(odbc_fetch_row($result));
        }
        odbc_free_result($result);
    }

     
    /**
     * Gets the value of id.
     *
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets the value of id.
     *
     * @param mixed $id the id
     *
     * @return self
     */
    private function _setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Gets the value of nomeFantasia.
     *
     * @return mixed
     */
    public function getNomeFantasia()
    {
        return $this->nomeFantasia;
    }

    /**
     * Sets the value of nomeFantasia.
     *
     * @param mixed $nomeFantasia the nome fantasia
     *
     * @return self
     */
    private function _setNomeFantasia($nomeFantasia)
    {
        $this->nomeFantasia = $nomeFantasia;

        return $this;
    }

    /**
     * Gets the value of rua.
     *
     * @return mixed
     */
    public function getRua()
    {
        return $this->rua;
    }

    /**
     * Sets the value of rua.
     *
     * @param mixed $rua the rua
     *
     * @return self
     */
    private function _setRua($rua)
    {
        $this->rua = $rua;

        return $this;
    }

    /**
     * Gets the value of complemento.
     *
     * @return mixed
     */
    public function getComplemento()
    {
        return $this->complemento;
    }

    /**
     * Sets the value of complemento.
     *
     * @param mixed $complemento the complemento
     *
     * @return self
     */
    private function _setComplemento($complemento)
    {
        $this->complemento = $complemento;

        return $this;
    }

    /**
     * Gets the value of bairro.
     *
     * @return mixed
     */
    public function getBairro()
    {
        return $this->bairro;
    }

    /**
     * Sets the value of bairro.
     *
     * @param mixed $bairro the bairro
     *
     * @return self
     */
    private function _setBairro($bairro)
    {
        $this->bairro = $bairro;

        return $this;
    }

    /**
     * Gets the value of uf.
     *
     * @return mixed
     */
    public function getUf()
    {
        return $this->uf;
    }

    /**
     * Sets the value of uf.
     *
     * @param mixed $uf the uf
     *
     * @return self
     */
    private function _setUf($uf)
    {
        $this->uf = $uf;

        return $this;
    }

    /**
     * Gets the value of cidade.
     *
     * @return mixed
     */
    public function getCidade()
    {
        return $this->cidade;
    }

    /**
     * Sets the value of cidade.
     *
     * @param mixed $cidade the cidade
     *
     * @return self
     */
    private function _setCidade($cidade)
    {
        $this->cidade = $cidade;

        return $this;
    }

    /**
     * Gets the value of cep.
     *
     * @return mixed
     */
    public function getCep()
    {
        return $this->cep;
    }

    /**
     * Sets the value of cep.
     *
     * @param mixed $cep the cep
     *
     * @return self
     */
    private function _setCep($cep)
    {
        $this->cep = $cep;

        return $this;
    }

    /**
     * Gets the value of telefone.
     *
     * @return mixed
     */
    public function getTelefone()
    {
        return $this->telefone;
    }

    /**
     * Sets the value of telefone.
     *
     * @param mixed $telefone the telefone
     *
     * @return self
     */
    private function _setTelefone($telefone)
    {
        $this->telefone = $telefone;

        return $this;
    }

}

?>