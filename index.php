<?php
require_once "Cliente.class.php";
$cliente = new Cliente();
$conect = $cliente->conexao();
$resultado = $cliente->buscar_todos_clientes($conect);
echo "<pre>";
var_dump($resultado);
echo "</pre>";
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Clientes</title>
</head>

<body>
    <h1>Clientes</h1>
    <a href="form_cliente.html">Novo Cliente</a>
    <br>
    <table border="1">
        <thead>
            <tr>
                <th>Nome</th>
                <th>CPF</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($resultado as $dado) {
                echo "<tr>
                 <td>
                 <td> {$dado->nome_cliente}&nbsp{$dado->sobrenome_cliente}</td>
                 <td>{$dado->cpf_cliente}</td>
                     </tr>";
            }
            ?>

        </tbody>
    </table>
</body>

</html>