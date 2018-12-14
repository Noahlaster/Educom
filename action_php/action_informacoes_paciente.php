<?php
    $pesquisa = $_POST["pesquisa"];

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
        echo "<script>alert('ERRO AO TENTAR LOCALIZAR PACIENTE, INFORME UM ID VÁLIDO.');javascript:window.location='/informacoes_paciente.php';</script>";
    }

        $sql = "SELECT * FROM tb_cadastro WHERE id='$pesquisa';";
        $query = mysqli_query($conn, $sql);

        while ($res1 = mysqli_fetch_row($query)) {
            $nome = $res1[1];
        }


        echo "$nome";

    mysqli_close($conn);

?>