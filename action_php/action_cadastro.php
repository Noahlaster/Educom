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



    include "conexao.inc";

    $sql = "INSERT INTO tb_cadastro (nome, sexo, idade, cpf, telefone, celular, cep, bairro, municipio, endereco) VALUES ('$nome', '$sexo','$idade', '$cpf', '$telefone', '$celular', '$cep', '$bairro', '$municipio', '$endereco')";

    $query = mysqli_query($conn, $sql);

    mysqli_close($conn);

?>

    <script>
        alert('Cadastro realizado com sucesso !');
        javascript:window.location='/cadastro.php';
    </script>



