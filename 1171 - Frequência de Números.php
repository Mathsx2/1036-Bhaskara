<?php
    $contagem = array();

    while ($entrada = fgets(STDIN)) {
        $valor = intval($entrada);
        if (array_key_exists($valor, $contagem)) {
            $contagem[$valor]++;
        } else {
            $contagem[$valor] = 1;
        }
    }

    ksort($contagem);

    foreach ($contagem as $valor => $freq) {
        printf("%d aparece %d vez(es)\n", $valor, $freq);
    }
?>