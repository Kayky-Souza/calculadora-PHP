<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calculadora</title>
</head>

<body>
    <form action="calcular.php" method="POST">
    <label for="num1">Valor 1</label>
    <input name="num1" id="num1" type="number">

    <label for="num2">Valor 2</label>
    <input name="num2" id="num2" type="number">

    <label for="op">Escolha a operação:</label>

    <select name="op" id="op">
        <option value="adicao">adicao</option>
        <option value="subtracao">subtracao</option>
        <option value="multiplicacao">multiplicacao</option>
        <option value="divisao">divisao</option>
    </select>

    <input type="submit" name="submit" id="submit" value="ENVIAR">
    </form>
</body>

</html>