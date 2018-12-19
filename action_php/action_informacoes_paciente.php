<?php
    $pesquisa = $_POST["pesquisa"];
    $exclui = $_POST['exclui'];
    $registro = $_POST['registro'];
    $atualiza = $_POST['atualiza'];

    session_start();

    include "conexao.inc";

    $sql2 = "SELECT confirmacao FROM login;";
    $query2 = mysqli_query($conn, $sql2);

    while($res = mysqli_fetch_row($query2)){
        $confirmacao = $res[0];
        $quant = mysqli_affected_rows();
    }
    if($confirmacao != '1') {
        mysqli_error($conn);
        echo "<script>alert('USUÁRIO NÃO ESTÁ LOGADO, EFETUE O LOGIN NOVAMENTE !');javascript:window.location='/index.php';</script>";
    }
    if($pesquisa == ""){
        echo "<script>alert('ERRO AO TENTAR LOCALIZAR PACIENTE, INFORME UM ID VÁLIDO.');javascript:window.location='/cadastrados.php';</script>";
    }
    if($registro == 'Registro Completo'){

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

            $nasc = $res1[24];
            $e_civil = $res1[25];
            $filiacao = $res1[26];
            $escolaridade = $res1[27];
            $renda = $res1[28];
            $dependente = $res1[29];
            $q_inicial = $res1[30];

            $alteracao = $res1[31];
            $personalidade = $res1[32];
            $profissao = $res1[33];

        }

        $_SESSION['registro'] = $pesquisa;

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

        $_SESSION['nasc'] = $nasc;
        $_SESSION['e_civil'] = $e_civil;
        $_SESSION['filiacao'] = $filiacao;
        $_SESSION['escolaridade'] = $escolaridade;
        $_SESSION['profissao'] = $profissao;
        $_SESSION['renda'] = $renda;
        $_SESSION['dependente'] = $dependente;

        $_SESSION['q_inicial'] = $q_inicial;
        $_SESSION['alteracao'] = $alteracao;
        $_SESSION['personalidade'] = $personalidade;

        header('Location: /informacoes_paciente.php');

    }
    if($exclui == "Excluir"){

        $sql = "DELETE FROM tb_cadastro WHERE id = '$pesquisa';";
        $query = mysqli_query($conn, $sql);


        echo "<script>alert('Paciente deletado com sucesso !');javascript:window.location='/cadastrados.php'</script>";

    }
    if($atualiza == "Atualizar dados"){

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

            $nasc = $res1[24];
            $e_civil = $res1[25];
            $filiacao = $res1[26];
            $escolaridade = $res1[27];
            $renda = $res1[28];
            $dependente = $res1[29];
            $q_inicial = $res1[30];

            $alteracao = $res1[31];
            $personalidade = $res1[32];
            $profissao = $res1[33];

        }

        $_SESSION['registro'] = $pesquisa;

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

        $_SESSION['nasc'] = $nasc;
        $_SESSION['e_civil'] = $e_civil;
        $_SESSION['filiacao'] = $filiacao;
        $_SESSION['escolaridade'] = $escolaridade;
        $_SESSION['profissao'] = $profissao;
        $_SESSION['renda'] = $renda;
        $_SESSION['dependente'] = $dependente;

        $_SESSION['q_inicial'] = $q_inicial;
        $_SESSION['alteracao'] = $alteracao;
        $_SESSION['personalidade'] = $personalidade;

        header('Location: /atualiza_cadastro.php');

    }

    mysqli_close($conn);

?>