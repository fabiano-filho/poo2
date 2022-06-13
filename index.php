<?php
require_once 'class/Livro.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        
        <meta charset="UTF-8">
        <title>Programação Orientada a Objetos II - PHP</title>
    </head>
    <body>
        <table>
            <tr>Coluna</tr>
        <?php
            $query = Livro::getLivros();
            while($registro = $query -> fetch()){
                
            }
        ?>        
        </table>    
    </body>
</html>
