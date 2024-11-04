<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charsert="UTF-8">
        <title>Cadastrar Gêneros</title>
    </head>
    <body>
        <body>
        <?php
            include 'conexao.php';

            if($_POST["nome"])
            {
                $nomeGenero = $_POST["nome"];
                try
                {
                    $stmt = $con->prepare('INSERT INTO generos (nome) VALUES (:nome);');
                    $stmt->execute(array(
                        ':nome' => $nomeGenero                        
                    ));

                    echo '<div>Gênero cadastrado com sucesso!</div>';
                    echo '<div><a href=index.php>Página inicial<a/></div>';
                }
                catch(PDOException $ex)
                {
                    echo '<div>Ocorreu um erro: '. $ex->getMessage().'</div>';
                }
            }
        ?>
    </body>
</html>
