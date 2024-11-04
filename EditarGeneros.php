<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Editar Gêneros</title>
    </head>
    <body>
        <?php
            include 'conexao.php';

            if($_GET["id"])
            {
                $idGenero = $_GET["id"];
                try
                {
                    $consulta = $con->query("SELECT idgeneros, nome FROM generos
                    WHERE idgeneros = $idGenero;");
                    
                }
                catch(PDOException $ex)
                {
                    echo '<div>Ocorreu um erro: '. $extou->getMessage().'</div>';
                }
            }
        ?>
        
        <form action="GeneroEditado.php" method="post">
            <label for="nome">Nome do gênero:</label>
            <?php while ($linha= $consulta->fetch(PDO::FETCH_ASSOC)) {?>
                <input type= "hidden" id="id" name="id" value="<?php echo $linha['idgeneros']; ?>"> 
                <input type="text" name="nome" id="nome" required="" value="<?php echo $linha['nome']; ?>">
            <?php } ?>
            </br>
            <input type="submit" value="Atualizar">
        </form>
    </body>
</html>
