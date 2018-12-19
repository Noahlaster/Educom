<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <link rel="icon" href="img/icon.png">
        <title>Pacientes</title>
        <link rel="stylesheet" type="text/css" href="style/cadastrados.css">
        <link href="main.css?version=12" />
    </head>
    <body>
    <header>
        <nav>
            <img src="img/logo1.png">
            <a href="home.php">Início</a>
            <div class="divnav">
                <form class="fornav" method="post" action="action_php/action_home.php">
                    <input class="input1" type="submit" value="Sair" name="sair">
                </form>
            </div>
        </nav>
    </header>
    <section>
        <div class="divtable">
            <p class="paragraph">Lista de Pacientes</p>
            <form method="post" action="action_php/action_informacoes_paciente.php">
                <p class="paragraph" style="margin-left: -50px">ID:<input class="input2" type="text" size="4" name="pesquisa">
                    <input class="input3" type="submit" value="Registro Completo" name="registro">
                    <input class="input3" type="submit" value="Atualizar dados" name="atualiza">
                    <input type="submit" value="Excluir" name="exclui"></p>
            </form>
        <table border="1" align="center" cellspacing="0"cellpadding="3">
            <thead>
            <tr align="center">
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Sexo</th>
                    <th>Idade</th>
                    <th>CPF</th>
                    <th>Telefone</th>
                    <th>Celular</th>
                    <th>CEP</th>
                    <th>Bairro</th>
                    <th>Municipio</th>
                    <th>Endereço</th>
                </tr>
            </thead>

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


            echo "<tr><td>$id</td><td>$nome</td><td>$sexo</td><td>$idade</td><td>$cpf</td><td>$telefone</td><td>$celular</td><td>$cep</td><td>$bairro</td><td>$municipio</td><td>$endereco</td></tr>";


        }

        mysqli_close($conn);

        ?>
            </table>
        </div>
    </section>
    <footer>
        <p>Create by Jhonnata Novaes</p>
    </footer>
    </body>
</html>

