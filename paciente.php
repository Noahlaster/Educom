<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
            content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="img/icon.png">
    <title>Cadastro</title>
    <link rel="stylesheet" type="text/css" href="style/stylecadastro.css">
</head>
<body>
<header>
    <nav>
        <img src="img/logo1.png">
        <div class="divnav">
            <form class="fornav" method="post" action="action_php/action_home.php">
                <input style="margin-left: -90px" class="input" type="submit" value="Sair" name="sair">
            </form>
        </div>
    </nav>
</header>
<section>
            <div>
                <form name="formulario" method="post" action="action_php/action_cadastro.php">
                    <br>
                    <br>
                        <label class="titulo">Dados Pessoais</label>
                    <hr>
                    <br>
                        <label style="display: inline-block">Nome:</label>
                        <label class="label">Idade:</label>
                        <label class="label" style="margin-left: -145px">Nascimento:</label>
                        <label class="label" style="margin-left: -100px">Sexo:</label>
                        <label class="label" style="margin-left: -115px">Civil:</label>
                        <label class="label" style="margin-left: -110px">NºDependentes:</label>
                    <div class="divform">
                        <input type="text" name="nome" maxlength="40" size="30" required="required">
                        <input class="input2" type="text" name="idade" maxlength="3" size="3">
                        <input class="input2" type="text" name="nasc" maxlength="10" size="10">
                        <select class="input2" name="sexo" size="1"><option></option><option>Masculino</option><option>Feminino</option></select>
                        <select class="input2" name="e_civil" size="1"><option></option><option>Solteiro(a)</option><option>Casado(a)</option></select>
                        <input class="input2" type="text" name="dependente" maxlength="3" size="12">
                    </div>
                    <br>
                        <label style="display: inline-block">Filiação:</label>
                        <label class="label" style="margin-left: 60px">Escolaridade:</label>
                        <label class="label" style="margin-left: -28px">Profissão:</label>
                        <label class="label" style="margin-left: -60px">Renda:</label>
                    <div class="divform">
                        <input class="input2" style="margin-left: 0px" type="text" name="filiacao" maxlength="100" size="40">
                        <input class="input2" type="text" name="escolaridade" maxlength="20" size="20">
                        <input class="input2" type="text" name="profissao" maxlength="30" size="15">
                        <input class="input2" type="text" name="renda" maxlength="7" size="11">
                    </div>           
                    <br>
                        <label style="display: inline-block">CPF:</label>
                        <label class="label" style="margin-left: -130px">Telefone:</label>
                        <label class="label" style="margin-left: -90px">Celular:</label>
                        <label class="label" style="margin-left: -90px">Endereço:</label>
                    <div class="divform">
                        <input class="input2" style="margin-left: 0px" type="text" name="cpf" maxlength="11" size="9">
                        <input class="input2" type="text" name="telefone" maxlength="13" size="11">
                        <input class="input2" type="text" name="celular" maxlength="13" size="11">
                        <input class="input2" type="text" name="endereco" maxlength="100" size="55">
                    </div>
                    <br>                
                        <label style="display: inline-block">CEP:</label>
                        <label class="label" style="margin-left: -95px">Bairro:</label>
                        <label class="label" style="margin-left: -70px">Município:</label>
                    <div class="divform">
                        <input class="input2" style="margin-left: 0px" type="text" name="cep" maxlength="9" size="14">
                        <input class="input2" type="text" name="bairro" maxlength="15" size="14">
                        <input class="input2" type="text" name="municipio" maxlength="20" size="14">
                    </div>
                    <br>
                    <br>
                    <br>
                    <label class="titulo">Histórico Clínico</label>
                    <hr>
                    <br>
                    <label>Queixa inicial:</label><input type="text" name="q_inicial" maxlength="100" size="45">
                    <br>
                    <br>
                    <label>Alteração comportamental:</label><input type="text" name="alteracao" maxlength="100" size="45">
                    <br>
                    <br>
                    <label>Doenças:</label><input type="text" name="doenca" maxlength="100" size="45">
                    <br>
                    <br>
                    <label>Uso de medicamentos:</label><input type="text" name="medicamento" maxlength="100" size="45">
                    <br>
                    <br>
                    <label>Sintomas físicos e/ou psicológicos:</label><input type="text" name="sintoma" maxlength="100" size="45">
                    <br>
                    <br>
                    <label>Psicoterapia/fono/fisio/neuro/psiquiatria:</label><input type="text" name="acompanhamento" maxlength="100" size="45">
                    <br>
                    <br>
                    <label>Hábitos alimentares:</label><input type="text" name="h_alimentar" maxlength="100" size="45">
                    <br>
                    <br>
                    <br>
                    <br>
                    <label class="titulo">Histórico Familiar</label>
                    <hr>
                    <br>
                    <label>Composição familiar(genotograma):</label><input type="text" name="familia" maxlength="100" size="45">
                    <br>
                    <br>
                    <label>Eventos significativos:</label><input type="text" name="evento" maxlength="100" size="45">
                    <br>
                    <br>
                    <br>
                    <br>
                    <label class="titulo">Histórico Social</label>
                    <hr>
                    <br>
                    <label>Personalidade:</label><input type="text" name="personalidade" maxlength="100" size="45">
                    <br>
                    <br>
                    <label>Vida Social:</label><input type="text" name="social" maxlength="100" size="45">
                    <br>
                    <br>
                    <label>Hábitos de lazer:</label><input type="text" name="h_lazer" maxlength="100" size="45">
                    <br>
                    <br>
                    <label>Inserção em grupos:</label><input type="text" name="grupo" maxlength="100" size="45">
                    <br>
                    <br>
                    <br>
                    <br>
                    <label class="titulo">Dados Escolares</label>
                    <hr>
                    <br>
                    <label>Casos de reprovação:</label><input type="text" name="reprovacao" maxlength="100" size="45">
                    <br>
                    <br>
                    <label>Areas de dificuldade:</label><input type="text" name="dificuldade" maxlength="100" size="45">
                    <br>
                    <br>
                    <label>Hábitos de estudo:</label><input type="text" name="h_estudo" maxlength="100" size="45">
                    <br>
                    <br>
                    <br>
                        <input class="botao" type="submit" value="Cadastrar">
                </form>
            </div>
        </section>
<footer>
    <p>Criado por: Jhonnata Novaes
    <br>    
    Contato: jonnasnovaes@gmail.com</p>
</footer>
</body>
</html>

<?php

?>