<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $resposta = isset($_POST['resposta']) ? trim($_POST['resposta']) : '';

    // Normalizar: minúsculas, tirar espaços, transformar vírgula em ponto
    $resposta = strtolower($resposta);
    $resposta = str_replace(',', '.', $resposta);
    $resposta = preg_replace('/\s+/', '', $resposta);

    $respostaCorreta = '92.5hz';

    if ($resposta === $respostaCorreta) {
        header('Location: cord.html');
        exit;
    } else {
        header('Location: index.php?erro=1');
        exit;
    }
} else {
    header('Location: index.php');
    exit;
}
?>
