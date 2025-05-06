<div class="titulo">Multidimensionais</div>

<?php
$dados =[
    [
    "nome" => "guilherme",
    "idade" => 26
    ],
    [
    "nome" => "Bruna",
    "idade" => 25
    ],
];

echo '<br>' . $dados[0]['nome'];

//Para adicionar um novo elemento tem que colocar o colchetes vazio para nao sobrescrever
$dados[] = [
    "nome" => "Florinda",
    "idade" => 25,
    "naturalidade" => "Cidade do mexico"
];