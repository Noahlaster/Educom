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
    <form method="post" action="/action_php/action_gerarpdf.php">
        <br>
        <br>
        <label class="label">Registro Completo do Paciente</label>
        <br>
        <br>
        <input type="submit" value="Gerar PDF">
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
                        <label><i>Nome:</i>$nome</label>
                        <br>        
                        <label><i>Sexo:</i> $sexo</label>
                        <br>
                        <label><i>Idade:</i> $idade</label>
                        <br>
                        <label><i>CPF:</i> $cpf</label>
                        <br>
                        <label><i>Telefone:</i> $telefone</label>
                        <br>
                        <label><i>Celular:</i> $celular</label>
                        <br>
                        <label><i>CEP:</i> $cep</label>
                        <br>
                        <label><i>Bairro:</i> $bairro</label>
                        <br>
                        <label><i>Município:</i> $municipio</label>
                        <br>
                        <label><i>Endereço:</i> $endereco</label>
                        <br>
                        <br>
                        <br>
                        <label class=\"titulo\">Histórico Clínico</label>
                        <hr>
                        <label><i>Doenças:</i> $doenca</label>
                        <br>
                        <label><i>Uso de medicamentos:</i> $medicamento</label>
                        <br>
                        <label><i>Sintomas físicos e/ou mentais:</i> $sintoma</label>
                        <br>
                        <label><i>Acompanhamento ja realizado:</i> $acompanhamento</label>
                        <br>
                        <label><i>Hábitos alimentares:</i> $h_alimentar</label>
                        <br>
                        <br>
                        <br>
                        <label class=\"titulo\">Histórico Familiar</label>
                        <hr>
                        <label><i>Composição familiar:</i> $familia</label>
                        <br>
                        <label><i>Eventos significativos:</i> $evento</label>
                        <br>
                        <br>
                        <br>
                        <label class=\"titulo\">Histórico Social</label>
                        <hr>
                        <label><i>Vida social:</i> $social</label>
                        <br>
                        <label><i>Hábitos de lazer:</i> $h_lazer</label>
                        <br>
                        <label><i>Inserção em grupos:</i> $grupo</label>
                        <br>
                        <br>
                        <br>
                        <label class=\"titulo\">Dados Escolares</label>
                        <hr>
                        <label><i>Casos de reprovação:</i> $reprovacao</label>
                        <br>
                        <label><i>Areas de dificuldade:</i> $dificuldade</label>
                        <br>
                        <label><i>Hábitos de estudo:</i> $h_estudo</label>";
    ?>
</section>
<footer>
    <p>Create by Jhonnata Novaes</p>
</footer>
</body>
</html>
