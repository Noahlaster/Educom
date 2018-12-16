<?php
    $pesquisa = $_POST["pesquisa"];

    session_start();
    include "conexao.inc";

    $sql2 = "SELECT confirmacao FROM login;";
    $query2 = mysqli_query($conn, $sql2);

    while($res = mysqli_fetch_row($query2)){
        $confirmacao = $res[0];
    }
    if($confirmacao != '1') {
        mysqli_error($conn);
        echo "<script>alert('USUÁRIO NÃO ESTÁ LOGADO, EFETUE O LOGIN NOVAMENTE !');javascript:window.location='/index.php';</script>";
    }
    if($pesquisa == ""){
        echo "<script>alert('ERRO AO TENTAR LOCALIZAR PACIENTE, INFORME UM ID VÁLIDO.');javascript:window.location='/cadastrados.php';</script>";
    }
    else {

        $sql = "SELECT * FROM tb_cadastro WHERE id='$pesquisa';";
        $query = mysqli_query($conn, $sql);

        while ($res1 = mysqli_fetch_row($query)) {
            $nome = $res1[1];
            $sexo = $_res1[2];
            $idade = $_res1[3];
            $cpf = $_res1[4];
            $telefone = $_res1[5];
            $celular = $_res1[6];
            $cep = $_res1[7];
            $bairro = $_res1[8];
            $municipio = $_res1[9];
            $endereco = $_res1[10];

            $doenca = $_res1[11];
            $medicamento = $_res1[12];
            $sintoma = $_res1[13];
            $acompanhamento = $_res1[14];
            $h_alimentar = $_res1[15];

            $familia = $_res1[16];
            $evento = $_res1[17];

            $social = $_res1[18];
            $h_lazer = $_res1[19];
            $grupo = $_res1[20];

            $reprovacao = $_res1[21];
            $dificuldade = $_res1[22];
            $h_estudo = $_res1[23];
        }

        $_SESSION['nome'] = $nome;
        $_SESSION['sexo'] = $sexo;
        $_SESSION['idade'] = $idade;
        $_SESSION['cpf'] = $cpf;
        $_SESSION['telefone'] = $telefone;
        $_SESSION['celular'] = $celular;
        $_SESSION['cep'] = $cep;
        $_SESSION['bairro'] = $bairro;
        $_SESSION['municipio'] = $municipio;
        $_SESSION['endereco'] = $endereco;
        $_SESSION['doenca'] = $doenca;
        $_SESSION['medicamento'] = $medicamento;
        $_SESSION['sintoma'] = $sintoma;
        $_SESSION['acompanhamento'] = $acompanhamento;
        $_SESSION['h_alimentar'] = $h_alimentar;
        $_SESSION['familia'] = $familia;
        $_SESSION['evento'] = $evento;
        $_SESSION['social'] = $social;
        $_SESSION['h_lazer'] = $h_lazer;
        $_SESSION['grupo'] = $grupo;
        $_SESSION['reprovacao'] = $reprovacao;
        $_SESSION['dificuldade'] = $dificuldade;
        $_SESSION['h_estudo'] = $h_estudo;

        header('Location: /informacoes_paciente.php');

    }

    mysqli_close($conn);

?>