<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Clientes Cadstrados</title>
        <link rel="stylesheet" type="text/css" href="style/cadastrados.css">
    </head>
    <body>
    <header>
        <nav>
            <img src="img/logo.png">
            <a href="cadastro.php">Novo Cadastro</a>
            <a href="cadastrados.php">Pessoas Cadastradas</a>
        </nav>
    </header>
    <section>

        <br>

        <table border="1" align="center" cellspacing="0"cellpadding="3">
                <tr align="center">
                    <th>ID</th>
                    <th>NOME</th>
                    <th>SEXO</th>
                    <th>IDADE</th>
                    <th>CPF</th>
                    <th>TELEFONE</th>
                    <th>CELULAR</th>
                    <th>CEP</th>
                    <th>BAIRRO</th>
                    <th>MUNICIPIO</th>
                    <th>ENDERECO</th>
                </tr>

        <?php
        include 'action_php/conexao.inc';

        $sql = "SELECT * FROM tb_cadastro";

        $query = mysqli_query($conn, $sql);

        while($res = mysqli_fetch_row($query)){

            $id = $res[0];
            $nome = $res[1];
            $sexo = $res[2];
            $idade = $res[3];
            $cpf = $res[4];
            $telefone = $res[5];
            $celular = $res[6];
            $cep = $res[7];
            $bairro = $res[8];
            $municipio = $res[9];
            $endereco = $res[10];

            echo "<td>$id</td><td>$nome</td><td>$sexo</td><td>$idade</td><td>$cpf</td><td>$telefone</td><td>$celular</td><td>$cep</td><td>$bairro</td><td>$municipio</td><td>$endereco</td><tr></tr>";


        }

        mysqli_close($conn);

        ?>
        </table>
    </section>
    <footer>
        <p>Create by Jhonnata Novaes</p>
    </footer>
    </body>
</html>

