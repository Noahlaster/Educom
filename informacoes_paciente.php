<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Registro Completo</title>
    <link rel="icon" href="img/icon.png">
    <link rel="stylesheet" type="text/css" href="style/informacoes_paciente.css">
</head>
<body>
<header>
    <nav>
        <img src="img/logo1.png">
        <a href="home.php">Início</a>
        <div class="divnav">
            <form class="formnav" method="post" action="action_php/action_home.php">
                <input class="input" type="submit" value="Sair" name="sair">
            </form>
        </div>
    </nav>
</header>
<section>
    <form method="post" action="action_php/action_informacoes_paciente.php">
        <label class="label">Registro Completo do Paciente</label>
        <br>
        <br>
        <br>
        <br>
        <br>
        <label>ID:</label><input class="inputpesquisa" type="text" name="pesquisa" value="" maxlength="11" size="5">
        <input type="submit" value="Pesquisar">
    </form>
    <?php
        session_start();

        $nome = $_SESSION['nome'];
        $sexo = $_SESSION["sexo"];
        $idade = $_SESSION["idade"];
        $cpf = $_SESSION["cpf"];
        $telefone = $_SESSION["telefone"];
        $celular = $_SESSION["celular"];
        $cep = $_SESSION["cep"];
        $bairro = $_SESSION["bairro"];
        $municipio = $_SESSION["municipio"];
        $endereco = $_SESSION["endereco"];

        $doenca = $_SESSION["doenca"];
        $medicamento = $_SESSION["medicamento"];
        $sintoma = $_SESSION["sintoma"];
        $acompanhamento = $_SESSION["acompanhamento"];
        $h_alimentar = $_SESSION["h_alimentar"];

        $familia = $_SESSION["familia"];
        $evento = $_SESSION["evento"];

        $social = $_SESSION["social"];
        $h_lazer = $_SESSION["h_lazer"];
        $grupo = $_SESSION["grupo"];

        $reprovacao = $_SESSION["reprovacao"];
        $dificuldade = $_SESSION["dificuldade"];
        $h_estudo = $_SESSION["h_estudo"];

        echo "<form name=\"formulario\" method=\"post\" action=\"action_php/action_cadastro.php\">

                    <br>
                    <br>
                        <label class=\"titulo\">Dados Pessoais</label>
                    <hr>
                    <br>
                        <label>Nome:$nome</label>";
    ?>
</section>
<footer>
    <p>Create by Jhonnata Novaes</p>
</footer>
</body>
</html>
