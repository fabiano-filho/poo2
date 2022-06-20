<?php
require_once 'class/Livro.php';
require_once 'class/Pessoa.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        
        <meta charset="UTF-8">
        <title>Programação Orientada a Objetos II - PHP</title>
    </head>
    <body>
        <table border="1">
            <tr>
                <th>Cod_livro</th>
                <th>cod_pessoa_emprestimo</th>
                <th>titulo_livro</th>
                <th>autor_livro</th>
                <th>ind_emprestimo</th>
            </tr>
            
        <?php
            $query = Livro::getLivros();
            while($registro = $query -> fetch()){?>
            <tr>
                <td><?php echo $registro['Id'];?></td>
                <td> 
                    <?php
                        if(!$registro['ind_emprestimo']) {
                            echo '';
                        }else {
                            echo $registro['cod_pessoa_emprestimo'];
                        }
                         
                    ?>   
                </td>
                <td><?php echo $registro['titulo_livro'];?></td>
                <td><?php echo $registro['autor_livro'];?></td>
                <td>
                    <?php 
                        if($registro['ind_emprestimo']){
                            echo "Disponível - "; ?>
                            <a href="emprestar.php?codLivro=<?php echo $registro['Id'];?>">
                                Emprestar
                            </a>
                    <?php    
                        }else {
                            echo "Indisponível - Pessoa - "; ?>
                            <a href="devolver.php">Devolver</a>
                    <?php    
                        }
                    ?>          
                </td>
            </tr>
        <?php
            }
        ?>        
        </table>    
    </body>
</html>
