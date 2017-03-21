<?php
    
    require("Conexao.php");
class Email{
    private $destinatario = "";
    private $assunto = "";
    private $msg = "";
    
    function enviarEmail(){
		$c = new Conexao;

		$sql = "dbo.SP_DDTotalEnviaEmail '".$this->assunto."','".$this->destinatario."','','".$this->msg."'";
        $sql = utf8_decode($sql);
		$result = $c->query($sql);
		if($result){
			$retorno = 1;
		}else{
			$retorno = 0;
		}
		return array("retorno" => $retorno);
	}

     /**
     * Gets the value of destinatario.
     *
     * @return mixed
     */
    public function getDestinatario()
    {
        return $this->destinatario;
    }

    /**
     * Sets the value of destinatario.
     *
     * @param mixed $destinatario the destinatario
     *
     * @return self
     */
    public function _setDestinatario($destinatario)
    {
        $this->destinatario = $destinatario;

        return $this;
    }

    /**
     * Gets the value of assunto.
     *
     * @return mixed
     */
    public function getAssunto()
    {
        return $this->assunto;
    }

    /**
     * Sets the value of assunto.
     *
     * @param mixed $assunto the assunto
     *
     * @return self
     */
    public function _setAssunto($assunto)
    {
        $this->assunto = $assunto;

        return $this;
    }

    /**
     * Gets the value of msg.
     *
     * @return mixed
     */
    public function getMsg()
    {
        return $this->msg;
    }

    /**
     * Sets the value of msg.
     *
     * @param mixed $msg the msg
     *
     * @return self
     */
    public function _setMsg($msg)
    {
        $this->msg = $msg;

        return $this;
    }
}

?>