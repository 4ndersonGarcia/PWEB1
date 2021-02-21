<?php

require_once "Produto.php";

class Dvd extends Produto{

    private $titulo;
    private $ano;

    public function __construct(int $codigo, float $preco, string $titulo, int $ano)
    {
        $key = array_search("", ["codigo" => $codigo,"preco" => $preco,"titulo" => $titulo, "ano" => $ano]);
        if($key){
            throw new Exception("InformaçãoNulaException: O valor {$key} está vazio");
        }

        $this->codigo = $codigo;
        $this->preco = $preco;
        $this->titulo = $titulo;
        $this->ano = $ano;
    }

    public function getTitulo(): string
    {
        return $this->titulo;
    }


    public function getAno(): int
    {
        return $this->ano;
    }

}