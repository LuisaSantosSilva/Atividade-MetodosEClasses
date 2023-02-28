<?php

//importação 
require_once("automoveis.class.php");

//Classe com o nome Execucao
class Execucao {
    //objeto automovel com a classe privada
    private $automovel;

    public function __construct(){
        //objetos automovel1 e automovel2 que recebem a classe automovel
        $automovel1 = new automovel();
        $automovel2 = new automovel();

        //Colocando titúlo como Automóvel 1 para organização de página 
        echo "Automóvel 1: <br> ";

        //passar um valor para o método setTipo 
        $automovel1 ->setTipo("Tipo: Porsche");
        //imprimir o valor do método getTipo
        echo $automovel1 -> getTipo() ;

        //passar um valor para o método setCor 
        $automovel1 ->setCor("Cor: Cinza");
        //imprimir o valor do método getCor 
        echo "<br>" . $automovel1 -> getCor() ;

        //passar um valor para o método setPlaca 
        $automovel1 ->setPlaca("Placa: MHZ-4345");
        //imprimir o valor do método getPlaca 
        echo "<br>" . $automovel1 -> getPlaca() ;

        //passar um valor para o método setNdeportas 
        $automovel1 ->setNdeportas("Núm. de Portas: 2");
        //imprimir o valor do método getNdeportas 
        echo "<br>" . $automovel1 -> getNdeportas();


        //quebras de linha
        echo "<br> <br> <br>";


        //Colocando titúlo como Automóvel 2 para organização de página 
        echo "Automóvel 2: <br> ";

        //passar um valor para o método setTipo
        $automovel2 ->setTipo("Tipo: Ferrari");
        //imprimir o valor do método getTipo
        echo $automovel2 -> getTipo() ;

        //passar um valor para o método setCor
        $automovel2 ->setCor("Cor: Vermelho");
        //imprimir o valor do método getCor
        echo "<br>" . $automovel2 -> getCor() ;

        //passar um valor para o método setPlaca
        $automovel2 ->setPlaca("Placa: JKL-0001");
        //imprimir o valor do método getPlaca
        echo "<br>" . $automovel2 -> getPlaca() ;

        //passar um valor para o método setNdeportas
        $automovel2 ->setNdeportas("Núm. de Portas: 4");
        //imprimir o valor do método getNdeportas
        echo "<br>" . $automovel2 -> getNdeportas();
    }
}new Execucao();

?>