<?php
require_once 'class/Livro.php';
require_once 'class/Pessoa.php';

if (isset($_GET["CodExclui"])) {
  $CodLivro=$_GET["CodExclui"];
  $delete = Livro::Delete($CodLivro); 
  echo "<script>alert('Livro Apagado com Sucesso');</script>";
}

$getLivros = Livro::getLivros();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 3</title>
</head>
<body>   

<article>
        <h3>LIVROS</h3>
        <table>
            <thead>
                <tr>
                <th>ID</th>
                <th>TITULO</th>
                <th>AUTOR</th>
                <th>ISBN</th>
                <th>EDITORA</th>
                <th>QTD_PAGINAS</th>
                <th>Excluir</th>
                </tr>
            </thead>
            <?php
                while ($row = $getLivros->fetch()) {
                ?>
            <tbody>
                <tr>
                <td><?php echo($row["cod_livro"]); ?></td>
                <td><?php echo ($row["titulo_livro"]); ?></td>
                <td><?php echo($row["autor_livro"]); ?></td>
                <td><?php echo($row["cod_isbn"]); ?></td>
                <td><?php echo($row["nome_editora"]); ?></td>
                <td><?php echo($row["qtd_paginas"]); ?></td>
                <td>
                    <a href="index.php?CodExclui=<?php echo($row["cod_livro"]); ?>">Excluir</a>
                </td>
                </tr>
            </tbody>
        <?php
            } ?>
        </table>
        <button>
        <a href="form_cadastro.php">Cadastrar</a>
        </button>
</article> 


</body>
</html>
