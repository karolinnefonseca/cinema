<?php
include 'conexao.php';
    $consulta = $con->query("SELECT idgeneros, nome FROM generos;");
        ?>
        <!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Manter Gêneros</title>
    </head>
    <body>
        <h2>Manter Gêneros</h2>
        <form action="CadastrarGeneros.php" method="post">
            <label for="nome">Nome do gênero:</label>
            <input type="text" name="nome" id="nome" required="">
            </br>
            <input type="submit" value="Cadastrar">
        </form>
        <hr>
        <h2>Gêneros Cadastrados</h2>
        <table border="1">
            <tr>
                <td>ID</td>
                <td>GÊNERO</td>
                <td>AÇÃO</td>
            </tr>
            <?php while ($linha= $consulta->fetch(PDO::FETCH_ASSOC)) {?>
            <tr>
                <td><?php echo $linha['idgeneros']; ?></td>
                <td><?php echo $linha['nome']; ?></td>
                <td><a href="EditarGeneros.php?id=<?php echo $linha['idgeneros']; ?>">EDITAR</a>
                 | <a href="ExcluirGeneros.php?id=<?php echo $linha['idgeneros']; ?>">EXCLUIR</a></td>
            </tr>
            <?php } ?>
        </table>
    </body>
</html>

