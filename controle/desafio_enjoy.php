
<div class="titulo">Desafio do Enjoy</div>

<form action="#" method="post">
    <div>
        <label for="lc">🧼 Limpou a casa?</label>
        <select name="lc" id="lc">
            <option value="1" <?= isset($_POST['lc']) && $_POST['lc'] == '1' ? 'selected' : '' ?>>✅ Limpou</option>
            <option value="0" <?= isset($_POST['lc']) && $_POST['lc'] == '0' ? 'selected' : '' ?>>❌ Não limpou</option>
        </select>
    </div>
    <div>
        <label for="tb">🛁 Tomou banho?</label>
        <select name="tb" id="tb">
            <option value="1" <?= isset($_POST['tb']) && $_POST['tb'] == '1' ? 'selected' : '' ?>>✅ Tomou</option>
            <option value="0" <?= isset($_POST['tb']) && $_POST['tb'] == '0' ? 'selected' : '' ?>>❌ Não tomou</option>
        </select>
    </div>
    <button type="submit">👊 Executar</button>
</form>


    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $lc = $_POST['lc'] == '1'; // Limpou a casa?
        $tb = $_POST['tb'] == '1'; // Tomou banho?

        $mensagem1 = '';
        $mensagem2 = '';

        if ($lc && $tb) {
            $mensagem1 = "💃 Leva a gatinha #confia";
            $mensagem2 = "🚗 Vai lá sair tigrão";
        } elseif (!$lc && $tb) {
            $mensagem1 = "🧹 Melhor não arriscar, casa vai tá suja";
            $mensagem2 = "🚗 Vai lá sair tigrão";
        } elseif ($lc && !$tb) {
            $mensagem1 = "💃 Leva a gatinha";
            $mensagem2 = "🚫 Nem sai de casa zé porcao";
        } else {
            $mensagem1 = "😤 Vai fazer suas obrigações zé folgado";
            $mensagem2 = "🚫 Nem sai de casa zé porcao";
        }

        echo "<div class='resultado'><p>$mensagem1<br>$mensagem2</p></div>";
    }
    ?>

</body>
</html>
