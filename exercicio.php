<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="recursos/css/estilo.css">
    <link rel="stylesheet" href="recursos/css/exercicio.css">
    <title>Exercício</title>
</head>
<body class="exercicio">
    <header class="cabecalho">
        <h1>Guilherme Ferraz</h1>
        <h2>Visualização do Exercício</h2>
    </header>
    <nav class="navegacao">
    <a href="<?=$_GET['dir']?>/<?=$_GET['file']?>.php" class="verde">Sem formatação</a>


        <a href="index.php" class="vermelho"> Voltar</a>
    </nav>
    <main class="principal">
        <div class="conteudo"> 
          <!--  -->
            <?php
            include (__DIR__."/{$_GET['dir']}/{$_GET['file']}.php");
            ?>
          
        </div>
    </main>
    <footer class="rodape">
        Guilherme Ferraz © <?= date('Y');?>
    </footer>
</body>

</html>