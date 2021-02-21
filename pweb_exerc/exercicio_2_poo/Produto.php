<?php

abstract class Produto{

   
    protected $codigo;
    protected $preco;

   
    public function getCodigo(): int
    {
        return $this->codigo;
    }

   
    public function getPreco(): float
    {
        return $this->preco;
    }
}