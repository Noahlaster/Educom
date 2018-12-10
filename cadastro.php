<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Cadastro</title>
        <link rel="stylesheet" type="text/css" href="style/cadastro.css">
    </head>
    <body>
        <header>
            <nav>
                <a href="index.php">Página Inicial</a>
                <a href="cadastro.php">Cadastro</a>
            </nav>
        </header>

        <div>
            <form name="formulario" method="post" action="action_cadastro.php">

                <br>
                Name: <input type="text" name="name" maxlength="40" size="30">
                <br>
                <br>
                Age: <input type="text" name="age" maxlength="3" size="3">

                <br>
                <br>

                <input type="submit" value="Cadastrar">
                <input type="reset" value="Limpar Campos">

            </form>
        </div>

    </body>
</html>
