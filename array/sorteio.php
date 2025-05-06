<div class="titulo">Desafio sorteio</div>

<?php
$nomes = ["Iron man", "Hulk", "Thor", "Captain America"];
//Para pegar um conteudo do array se usa o "array_rand"

// Associa cada nome a uma cor
$cores = [
    "Iron man" => "red",
    "Hulk" => "green",
    "Thor" => "blue",
    "Captain America" => "navy"
];

$sorteio = array_rand($nomes);
$heroi = $nomes[$sorteio];
$cor = $cores[$heroi];

echo"<h1>Atualize a pagina para sortea um herói</h1>";

echo "<h1 style='color: $cor; text-align: center;'>$heroi</h1>";
?>