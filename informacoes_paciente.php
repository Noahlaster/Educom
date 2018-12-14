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
</section>
<footer>
    <p>Create by Jhonnata Novaes</p>
</footer>
</body>
</html>
