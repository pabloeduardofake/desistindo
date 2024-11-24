<?php
// Verifica se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recebe o texto digitado no formulário
    $text = $_POST['text'];

    // Variáveis para contar vogais e consoantes
    $vogais = 0;
    $consoantes = 0;

    // Converte o texto em um array de caracteres
    $chars = str_split($text);

    // Verifica cada caractere
    foreach ($chars as $char) {
        // Verifica se o caractere é uma letra
        if (ctype_alpha($char)) {
            // Se for uma vogal
            if (in_array(strtolower($char), ['a', 'e', 'i', 'o', 'u'])) {
                $vogais++;
            } else {
                // Caso contrário, é uma consoante
                $consoantes++;
            }
        }
    }

    // Exibe apenas os números de vogais e consoantes
    echo "<div class='container'>
            <h1>Contador de Vogais e Consoantes</h1>
            <p>Vogais: $vogais</p>
            <p>Consoantes: $consoantes</p>
            <a href='index.html'>Voltar</a>
          </div>";
}
?>


