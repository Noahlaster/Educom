<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <link rel="icon" href="img/icon.png">
        <title>Cadastro</title>
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
                        <label class="titulo">Dados Cadastrais</label>
                    <br>
                    <br>
                    <br>
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
                        <input class="botao" type="submit" value="Cadastrar">
                        <input class="botao" type="reset" value="Limpar Campos">
                </form>
            </div>
        </section>
        <footer>
            <p>Create by Jhonnata Novaes</p>
        </footer>
    </body>
</html>
