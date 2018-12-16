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
            $sexo = $res1[2];
            $idade = $res1[3];
            $cpf = $res1[4];
            $telefone = $res1[5];
            $celular = $res1[6];
            $cep = $res1[7];
            $bairro = $res1[8];
            $municipio = $res1[9];
            $endereco = $res1[10];

            $doenca = $res1[11];
            $medicamento = $res1[12];
            $sintoma = $res1[13];
            $acompanhamento = $res1[14];
            $h_alimentar = $res1[15];

            $familia = $res1[16];
            $evento = $res1[17];

            $social = $res1[18];
            $h_lazer = $res1[19];
            $grupo = $res1[20];

            $reprovacao = $res1[21];
            $dificuldade = $res1[22];
            $h_estudo = $res1[23];
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