<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of conexaoPM
 *
 * @author vidal
 */
class conexaoPM {

    //put your code here
    protected $localhost;
    protected $usuario;        //}aqui são os atributos do classe conexao
    protected $senha;
    protected $bancoDB;


    public function __construct($localhost, $usuario, $senha, $bancoDB) {   //aqui foi criado um contrutor para classe
        $this->localhost = $localhost;
        $this->usuario = $usuario;
        $this->senha = $senha;
        $this->bancoDB = $bancoDB;
    }

// aqui foi criado a função de conectar
    public function conectar() {
        $con = mysqli_connect($this->localhost, $this->usuario, $this->senha, $this->bancoDB) or die("<html><script language='JavaScript'>alert('Não é possível se conectar ao banco de dados! Por favor, tente novamente mais tarde.'),history.go(-1)</script></html>" . mysql_select_db('prontuariomedico', $con));

        if ($con !== mysql_error) {
            echo 'Conecção com sucesso';
        }
    }

    public function fecha() {
        mysqli_close;
    }

}
