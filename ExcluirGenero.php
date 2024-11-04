<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Excluir Gêneros</title>
    </head>
    <body>
        <?php
            include 'conexao.php';

            if($_GET["id"])
            {
                $idGenero = $_GET["id"];
                try
                {
                    $stmt = $con->prepare('DELETE FROM generos WHERE idgeneros = id');
                    $stmt->bindParam(':id', $idGenero);
                    $stmt->execute();

                    echo '<div>Gênero excluido com sucesso!</div>';
                    echo '<div><a href=index.php>Página inicial<a/></div>';
                }
                catch(PDOException $ex)
                {
                    echo '<div>Ocorreu um erro: '. $ex->getMessage().'</div>';
                }
            }
        ?>
    </body>
    </body>
</html>
