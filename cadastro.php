<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <link rel="icon" href="img/icon.png">
        <title>Cadastrar Paciente</title>
        <link rel="stylesheet" type="text/css" href="style/stylecadastro.css">
    </head>
    <body>
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
                <form name="formulario" method="post" action="action_php/action_cadastro.php">

                    <br>
                    <br>
                        <label class="titulo">Dados Pessoais</label>
                    <hr>
                    <br>
                        <label>Nome:</label><input type="text" name="nome" maxlength="40" size="30">
                    <br>
                    <br>
                        <label>Sexo:</label><select name="sexo" size="1"><option></option><option>Masculino</option><option>Feminino</option></select>
                    <br>
                    <br>
                        <label>Idade:</label><input type="text" name="idade" maxlength="3" size="3">
                    <br>
                    <br>
                        <label>CPF:</label><input type="text" name="cpf" maxlength="11" size="9">
                    <br>
                    <br>
                        <label>Telefone:</label><input type="text" name="telefone" maxlength="13" size="11">
                    <br>
                    <br>
                        <label>Celular:</label><input type="text" name="celular" maxlength="13" size="11">
                    <br>
                    <br>
                        <label>CEP:</label><input type="text" name="cep" maxlength="9" size="14">
                    <br>
                    <br>
                        <label>Bairro:</label><input type="text" name="bairro" maxlength="15" size="14">
                    <br>
                    <br>
                        <label>Município:</label><input type="text" name="municipio" maxlength="20" size="14">
                    <br>
                    <br>
                        <label>Endereço:</label><input type="text" name="endereco" maxlength="100" size="45">
                    <br>
                    <br>
                    <br>
                    <br>
                    <label class="titulo">Histórico Clínico</label>
                    <hr>
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
                    <br>
                        <input class="botao" type="submit" value="Cadastrar">
                </form>
            </div>
        </section>
        <footer>
            <p>Create by Jhonnata Novaes</p>
        </footer>
    </body>
</html>
