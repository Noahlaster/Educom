<?php
    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"];

    $conn = mysqli_connect('127.0.0.1:3308', 'root', '', 'formulario');
    mysqli_select_db($conn, 'formulario');

    $sql1 = "SELECT usuario FROM login;";
    $query1 = mysqli_query($conn, $sql1);

    $sql2 = "SELECT senha FROM login;";
    $query2 = mysqli_query($conn, $sql2);

    while(($res = mysqli_fetch_row($query1))&&($res2 = mysqli_fetch_row($query2))){
        $user = $res[0];
        $password = $res2[0];
    }

    if (($user == $usuario)&&($password == $senha)){

        echo "<script>javascript:window.location='/home.php';</script>";

        $sql3 = "UPDATE login SET confirmacao='1';";
        mysqli_query($conn, $sql3);
    }
    else{
        echo "<script>alert('LOGIN INCORRETO !');javascript:window.location='/index.php';</script>";
    }

    mysqli_close($conn);

?>