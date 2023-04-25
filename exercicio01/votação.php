<?php
        $voto = array(
            "vermelho" => 0,
            "azul" => 0,
            "verde" => 0
        );
            if (isset($_POST["opcao"])) {
                $opcao = $_POST["opcao"];
                $voto[$opcao]++;
            }
        echo "<h1>Fim da Votação!</h1>";
        foreach ($voto as $opcao => $voto) {}
        echo "<h3>Resultados finais</h3>";
        echo "<li>$opcao: $voto votos</li>";?>
</body>
</html>