<?php

require_once("automoveis.class.php");

class execucao{
    private $automotivo;

    public function __construct()
    {
        $automotivo = new Automotivo();

        $automotivo->setTipo("Porsche" ."<br>");
        echo $automotivo->getTipo();

        $automotivo->setCor("Cinza" ."<br>");
        echo $automotivo->getCor();

        $automotivo->setPlaca("MHZ-4345" ."<br>");
        echo $automotivo->getPlaca();

        $automotivo->setNportas("2" ."<br><br>");
        echo $automotivo->getNportas();

        //informações Ferrari
        $automotivo->setTipo("Ferrari" ."<br>");
        echo $automotivo->getTipo();

        $automotivo->setCor("Vermelho" ."<br>");
        echo $automotivo->getCor();

        $automotivo->setPlaca("JKLL-0001" ."<br>");
        echo $automotivo->getPlaca();

        $automotivo->setNportas("4" ."<br>");
        echo $automotivo->getNportas();


    }
}new execucao();
?>