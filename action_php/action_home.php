<?php

    include "conexao.inc";

    $novo = $_POST["novo"];
    $consultar = $_POST["consultar"];
    $sair = $_POST["sair"];
    $registro = $_POST["registro"];
    $ficha = $_POST["ficha"];

    $sql2 = "SELECT confirmacao FROM login;";
    $query2 = mysqli_query($conn, $sql2);

    while($res = mysqli_fetch_row($query2)){
        $confirmacao = $res[0];
    }
    if($confirmacao != '1'){
        mysqli_error($conn);
        echo "<script>alert('USUÁRIO NÃO ESTÁ LOGADO, EFETUE O LOGIN NOVAMENTE !');javascript:window.location='/index.php';</script>";
    }
    else{
        if(($novo == 1)&&($confirmacao == '1')){
            header('Location: /cadastro.php');

        }
        if(($consultar == 2)&&($confirmacao == '1')){
            header('Location: /cadastrados.php');
        }
        if(($ficha == 3)&&($confirmacao == '1')){
            header('Location: /ficha.php');
        }

        if($sair == "Sair"){
            $sql1 = "UPDATE login SET confirmacao='0';";
            mysqli_query($conn, $sql1);

            header('Location: /index.php');
        }
    }

    mysqli_close($conn);
?>