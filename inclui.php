<?php
include_once './class/Livro.php';
include_once './class/Pessoa.php';


$titulo_livro = isset($_POST['titulo_livro']) ? $_POST['titulo_livro'] : null;
$cod_isbn = isset($_POST['cod_isbn']) ? $_POST['cod_isbn'] : null;
$autor_livro = isset($_POST['autor_livro']) ? $_POST['autor_livro'] : null;
$nome_editora = isset($_POST['nome_editora']) ? $_POST['nome_editora'] : null;
$qtd_paginas = isset($_POST['qtd_paginas']) ? $_POST['qtd_paginas'] : null;


if (empty($titulo_livro) || empty($cod_isbn) || empty($autor_livro) || empty($nome_editora) || empty($qtd_paginas)) {
    echo "Preencha todos os campos!";
    exit;

} else {
    $livro = Livro::insert($titulo_livro, $autor_livro, $cod_isbn, $nome_editora, $qtd_paginas);
    echo "Livro cadastrado";
}

?>