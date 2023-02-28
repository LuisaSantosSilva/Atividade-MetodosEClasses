<?php

//classe com o nome automovel
class automovel {

    //objetos com visibilidade privada
    private $tipo;
    private $cor;
    private $placa;
    private $ndeportas;
    

    //Método de captura de valor do objeto
    public function getTipo(){
        return $this->tipo;
    }

    //Método de alteração de valor do objeto
    public function setTipo($tipo){
        return $this->tipo = $tipo;
    }

    //Método de captura de valor do objeto
    public function getCor(){
        return $this->cor;
    }

    //Método de alteração de valor do objeto
    public function setCor($cor){
        return $this->cor = $cor;
    }

    //Método de captura de valor do objeto
    public function getPlaca(){
        return $this->placa;
    }

    //Método de alteração de valor do objeto
    public function setPlaca($placa){
        return $this->placa = $placa;
    }

    //Método de captura de valor do objeto
    public function getNdeportas(){
        return $this->ndeportas;
    }

    //Método de alteração de valor do objeto
    public function setNdeportas($ndeportas){
        return $this->ndeportas = $ndeportas;
    }

}
?>
