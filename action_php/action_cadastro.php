<?php

    $nome = $_POST["nome"];
    $sexo = $_POST["sexo"];
    $idade = $_POST["idade"];
    $cpf = $_POST["cpf"];
    $telefone = $_POST["telefone"];
    $celular = $_POST["celular"];
    $cep = $_POST["cep"];
    $bairro = $_POST["bairro"];
    $municipio = $_POST["municipio"];
    $endereco = $_POST["endereco"];

    $doenca = $_POST["doenca"];
    $medicamento = $_POST["medicamento"];
    $sintoma = $_POST["sintoma"];
    $acompanhamento = $_POST["acompanhamento"];
    $h_alimentar = $_POST["h_alimentar"];

    $familia = $_POST["familia"];
    $evento = $_POST["evento"];

    $social = $_POST["social"];
    $h_lazer = $_POST["h_lazer"];
    $grupo = $_POST["grupo"];

    $reprovacao = $_POST["reprovacao"];
    $dificuldade = $_POST["dificuldade"];
    $h_estudo = $_POST["h_estudo"];

    include "conexao.inc";

    $sql2 = "SELECT confirmacao FROM login;";
    $query2 = mysqli_query($conn, $sql2);

    while($res = mysqli_fetch_row($query2)){
        $confirmacao = $res[0];
    }
    if($confirmacao != '1'){
        mysqli_error($conn);
        echo "<script>alert('USUÁRIO NÃO ESTÁ LOGADO, EFETUE O LOGIN NOVAMENTE !');javascript:window.location='/index.php';</script>";
    }
    else {
        $sql = "INSERT INTO tb_cadastro (nome, sexo, idade, cpf, telefone, celular, cep, bairro, municipio, endereco, doenca, medicamento, sintoma, acompanhamento, h_alimentar, familia, evento, social, h_lazer, grupo, reprovacao, dificuldade, h_estudo) VALUES ('$nome', '$sexo','$idade', '$cpf', '$telefone', '$celular', '$cep', '$bairro', '$municipio', '$endereco', '$doenca', '$medicamento', '$sintoma', '$acompanhamento', '$h_alimentar', '$familia', '$evento', '$social', '$h_lazer', '$grupo', '$reprovacao', '$dificuldade', '$h_estudo')";
        $query = mysqli_query($conn, $sql);
    }

    mysqli_close($conn);

?>

    <script>
        alert('Cadastro realizado com sucesso !');
        javascript:window.location='/cadastro.php';
    </script>



