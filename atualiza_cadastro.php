<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="img/icon.png">
    <title>Cadastrar Paciente</title>
    <link rel="stylesheet" type="text/css" href="style/stylecadastro.css">
</head>
<body>
<?php

    session_start();

    $id = $_SESSION['registro'];

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

    $nasc = $_SESSION["nasc"];
    $e_civil = $_SESSION["e_civil"];
    $filiacao = $_SESSION["filiacao"];
    $escolaridade = $_SESSION["escolaridade"];
    $profissao = $_SESSION["profissao"];
    $renda = $_SESSION["renda"];
    $dependente = $_SESSION["dependente"];

    $q_inicial = $_SESSION["q_inicial"];
    $alteracao = $_SESSION["alteracao"];
    $personalidade = $_SESSION["personalidade"];
?>
<header>
    <nav>
        <img src="img/logo1.png">
        <a href="home.php">Início</a>
        <div class="divnav">
            <form class="fornav" method="post" action="action_php/action_home.php">
                <input class="input" type="submit" value="Sair" name="sair">
            </form>
        </div>
    </nav>
</header>
<section>
    <div>
        <form name="formulario" method="post" action="action_php/action_atualizar.php">

            <br>
            <br>
            <label class="titulo">Dados Pessoais</label>
            <hr>
            <br>
            <label>Nome:</label><input type="text" name="nome" value="<?php echo $nome; ?>" maxlength="40" size="30">
            <br>
            <br>
            <label>Sexo:</label><select name="sexo" size="1"><option></option><option>Masculino</option><option>Feminino</option></select>
            <br>
            <br>
            <label>Idade:</label><input type="text" name="idade" value="<?php echo $idade; ?>" maxlength="3" size="3">
            <br>
            <br>
            <label>Data de nasc:</label><input type="text" name="nasc" value="<?php echo $nasc; ?>" maxlength="10" size="10">
            <br>
            <br>
            <label>Estado civil:</label><input type="text" name="e_civil" value="<?php echo $e_civil; ?>" maxlength="10" size="10">
            <br>
            <br>
            <label>Filiação:</label><input type="text" name="filiacao" value="<?php echo $filiacao; ?>" maxlength="100" size="40">
            <br>
            <br>
            <label>Escolaridade:</label><input type="text" name="escolaridade" value="<?php echo $escolaridade; ?>" maxlength="20" size="20">
            <br>
            <br>
            <label>Profissão:</label><input type="text" name="profissao" value="<?php echo $profissao; ?>" maxlength="20" size="20">
            <br>
            <br>
            <label>Renda Mensal:</label><input type="text" name="renda" value="<?php echo $renda; ?>" maxlength="7" size="20">
            <br>
            <br>
            <label>Nº de dependentes:</label><input type="text" name="dependente" value="<?php echo $dependente; ?>" maxlength="3" size="5">
            <br>
            <br>
            <label>CPF:</label><input type="text" name="cpf" value="<?php echo $cpf; ?>" maxlength="11" size="9">
            <br>
            <br>
            <label>Telefone:</label><input type="text" name="telefone" value="<?php echo $telefone; ?>" maxlength="13" size="11">
            <br>
            <br>
            <label>Celular:</label><input type="text" name="celular" value="<?php echo $celular; ?>" maxlength="13" size="11">
            <br>
            <br>
            <label>CEP:</label><input type="text" name="cep" value="<?php echo $cep; ?>" maxlength="9" size="14">
            <br>
            <br>
            <label>Bairro:</label><input type="text" name="bairro" value="<?php echo $bairro; ?>" maxlength="15" size="14">
            <br>
            <br>
            <label>Município:</label><input type="text" name="municipio" value="<?php echo $municipio; ?>" maxlength="20" size="14">
            <br>
            <br>
            <label>Endereço:</label><input type="text" name="endereco" value="<?php echo $endereco; ?>" maxlength="100" size="45">
            <br>
            <br>
            <br>
            <br>
            <label class="titulo">Histórico Clínico</label>
            <hr>
            <br>
            <label>Queixa inicial:</label><input type="text" name="q_inicial" value="<?php echo $q_inicial; ?>" maxlength="100" size="45">
            <br>
            <br>
            <label>Alteração comportamental:</label><input type="text" name="alteracao" value="<?php echo $alteracao; ?>" maxlength="100" size="45">
            <br>
            <br>
            <label>Doenças:</label><input type="text" name="doenca" value="<?php echo $doenca; ?>" maxlength="100" size="45">
            <br>
            <br>
            <label>Uso de medicamentos:</label><input type="text" name="medicamento" value="<?php echo $medicamento; ?>" maxlength="100" size="45">
            <br>
            <br>
            <label>Sintomas físicos e/ou psicológicos:</label><input type="text" name="sintoma" value="<?php echo $sintoma; ?>" maxlength="100" size="45">
            <br>
            <br>
            <label>Psicoterapia/fono/fisio/neuro/psiquiatria:</label><input type="text" name="acompanhamento" value="<?php echo $acompanhamento; ?>" maxlength="100" size="45">
            <br>
            <br>
            <label>Hábitos alimentares:</label><input type="text" name="h_alimentar" value="<?php echo $h_alimentar; ?>" maxlength="100" size="45">
            <br>
            <br>
            <br>
            <br>
            <label class="titulo">Histórico Familiar</label>
            <hr>
            <br>
            <label>Composição familiar(genotograma):</label><input type="text" name="familia" value="<?php echo $familia; ?>" maxlength="100" size="45">
            <br>
            <br>
            <label>Eventos significativos:</label><input type="text" name="evento" value="<?php echo $evento; ?>" maxlength="100" size="45">
            <br>
            <br>
            <br>
            <br>
            <label class="titulo">Histórico Social</label>
            <hr>
            <br>
            <label>Personalidade:</label><input type="text" name="personalidade" value="<?php echo $personalidade; ?>" maxlength="100" size="45">
            <br>
            <br>
            <label>Vida Social:</label><input type="text" name="social" value="<?php echo $social; ?>" maxlength="100" size="45">
            <br>
            <br>
            <label>Hábitos de lazer:</label><input type="text" name="h_lazer" value="<?php echo $h_lazer; ?>" maxlength="100" size="45">
            <br>
            <br>
            <label>Inserção em grupos:</label><input type="text" name="grupo" value="<?php echo $grupo; ?>" maxlength="100" size="45">
            <br>
            <br>
            <br>
            <br>
            <label class="titulo">Dados Escolares</label>
            <hr>
            <br>
            <label>Casos de reprovação:</label><input type="text" name="reprovacao" value="<?php echo $reprovacao; ?>" maxlength="100" size="45">
            <br>
            <br>
            <label>Areas de dificuldade:</label><input type="text" name="dificuldade" value="<?php echo $dificuldade; ?>" maxlength="100" size="45">
            <br>
            <br>
            <label>Hábitos de estudo:</label><input type="text" name="h_estudo" value="<?php echo $h_estudo; ?>" maxlength="100" size="45">
            <br>
            <br>
            <br>
            <br>
            <input class="botao" type="submit" value="Atualizar">
        </form>
    </div>
</section>
</body>
</html>
