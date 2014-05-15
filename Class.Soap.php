<?php

class Soap {

    private $function;
    private $options;

    public function __construct($value = '') {
        $this->client = new SoapClient('service.asmx?WSDL');
        $this->options = array('location' => 'service.asmx');
    }

    public function validarUsuario($login, $senha) {
        $function = 'valida';
        $arguments = array('valida' => array('usuario' => $login, 'senha' => $senha));
        $result = $this->client-> __soapCall($function, $arguments, $this->options);
        if ($result -> validaResult == 1) {
            return $result -> validaResult;
        } else {
            return false;
        }
    }

}
