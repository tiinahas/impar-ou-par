// faça um programa que receba um número e ele informa se é ímpar ou par. [if/else]

<?php
// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recebe o número do usuário (supondo que o usuário já tenha inserido o número)
    $numero = $_POST["numero"];

    // Verifica se o número é par ou ímpar
    if ($numero % 2 == 0) {
        $resultado = "par";
    } else {
        $resultado = "ímpar";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Verificar Par ou Ímpar</title>
</head>
<body>
    <h1>Verificar Par ou Ímpar</h1>
    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <label for="numero">Digite um número:</label>
        <input type="number" name="numero" required>
        <input type="submit" value="Verificar">
    </form>
    
    <?php
    // Exibe o resultado se a variável $resultado estiver definida
    if (isset($resultado)) {
        echo "O número $numero é $resultado.";
    }
    ?>
</body>
</html>