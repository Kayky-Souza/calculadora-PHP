<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $op = $_POST["op"];
}

if ($op == 'adicao') {
    $resultado = $num1 + $num2;
} elseif ($op == 'subtracao') {
    $resultado = $num1 - $num2;
} elseif ($op == 'multiplicacao') {
    $resultado = $num1 * $num2;
} elseif ($op == 'divisao') {
    // Verificar se o divisor não é zero
    if ($num2 != 0) {
        $resultado = $num1 / $num2;
    } else {
        $resultado = "Erro: Divisão por zero!";
    }
}
echo $resultado;
?>