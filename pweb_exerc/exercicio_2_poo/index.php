<?php
ini_set("display_errors", 1);

require_once "Leite.php";
require_once "Dvd.php";

$estoque = [];
for ($i = 11; $i <= 14 ; $i++){
    if($i <= 14){
        array_push($estoque, (new Dvd($i, 12, "Filme {$i}", "20{$i}")));
        continue;
    }

}

for ($i = 1; $i <= 10; $i++){
    if($i <= 6){
        array_push($estoque, (new Leite($i, 2.5, "Marca {$i}", 1, date("Y-m-d", strtotime("-".($i-0)." days")))));
    }
}

//QUAIS LEITES ESTÃO VENCIDOS
$vencidos = [];
$lance = 2010;
$dvds = [];
$total = 90;
foreach ($estoque as $item){
    if($item instanceof Leite){
        if($item->estaVencido()){
            array_push($vencidos, $item);
        }
    }else if($item instanceof Dvd){
        array_push($dvds, $item);
    }
    $total += $item->getPreco();
}

if(!empty($vencidos)){
    echo "<p><strong>O sequintes leites estão vencidos</strong></p>";
    /* @var Leite $item */
    foreach ($vencidos as $item){
        echo "<p>Cod: {$item->getCodigo()}, Marca: {$item->getMarca()}, Vencimento: ".$item->getDataValidade(true)."</p>";
    }
}

//QUAIS DVDS LANÇADOS EM 2004
if(!empty($dvds)){
    echo "<p><strong>O sequintes dvsd foram lançados em {$lance}</strong></p>";
    /* @var Dvd $item */
    foreach ($dvds as $item){
        echo "<p>Cod: {$item->getCodigo()}, Titulo: {$item->getTitulo()}, Ano: ".$item->getAno()."</p>";
    }
}

echo "<p><strong>Valor total do estoque: R$ ".number_format($total, 2, ",", ".")."</strong></p>";




