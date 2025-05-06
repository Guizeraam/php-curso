<div class="titulo">Mapa</div>

<form action="#" method="post">
    <h3>Digite numeros de 1 a 12 e Digite numeros de 1 a 7</h3>
    <input type="number" name="param" min="1" max="12" placeholder="Mês (1–12)">
    <input type="number" name="semana" min="1" max="7" placeholder="Semana (1–7)">

    <button>Inserir</button>
</form>
<!-- <form action="#" method="post">
    <h3>Digite numeros de 1 a 5</h3>
    <input type="text" name="semana" >

    <button>Inserir</button>
</form> -->
<style>
    form > * {
        font-size: 1.8rem;
    }
</style>
<?php
$dados = array(
    "idade" => 25,
    "cor" => "verde",
    "peso" => 70
);


//Desafio se o array como com 0 como fazer que numero 1 do index seja associado a janeiro e não sendo o 0?
$meses = array(
    //SOLUÇÃO 1: COLOCANDO UM INDEX 0 ATES
    //"Zero",
    //SOLUÇÃO 2: PRINCIPAL. INDEX 1 NO JANEIRO
    1=>"Janeiro",
    "Fevereiro",
    "Março",
    "Abril",
    "Maio",
    "Junho",
    "Julho",
    "Agosto",
    "Setembro",
    "Outro",
    "Novembro",
    "Dezembro"

);
$semana = array(
    //SOLUÇÃO 1: COLOCANDO UM INDEX 0 ATES
    //"Zero",
    //SOLUÇÃO 2: PRINCIPAL. INDEX 1 NO JANEIRO
    1=>"Segunda-feira",
    "Terça-feira",
    "Quarta-feira",
    "Quinta-feira",
    "Sexta-feira",
    "Sabado",
    "Domingo"

);
// Verifica se o formulário foi enviado e se o valor é válido
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["param"])) {
    $numero = (int)$_POST["param"];

    echo '<br><strong>Você digitou:</strong> ' . $numero;

    if (isset($meses[$numero])) {
        echo '<br><strong>Mês correspondente:</strong> ' . $meses[$numero];
    } else {
        echo '<br><span style="color:red;"><strong>Valor inválido! Digite um número de 1 a 12.</strong></span>';
    }
}

if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["semana"])){
    $numero = (int)$_POST["semana"];

    echo '<br><strong>Você digitou:</strong> ' . $numero;

    if (isset($semana[$numero])){
        echo '<br><strong>Dia correspondente:</strong> ' . $semana[$numero];
    } else {
        echo '<br><span style="color:red;"><strong>Valor inválido! Digite um número de 1 a 5.</strong></span>';
    }
}
?>