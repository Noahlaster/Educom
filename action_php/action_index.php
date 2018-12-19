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

    $sql3 = "SELECT usuario2 FROM login;";
    $query3 = mysqli_query($conn, $sql3);

    $sql4 = "SELECT senha2 FROM login;";
    $query4 = mysqli_query($conn, $sql4);

    while(($res = mysqli_fetch_row($query3))&&($res2 = mysqli_fetch_row($query4))){
        $user2 = $res[0];
        $password2 = $res2[0];
    }

    if (($user == $usuario)&&($password == $senha)){

        echo "<script>javascript:window.location='/home.php';</script>";

        $sql3 = "UPDATE login SET confirmacao='1';";
        mysqli_query($conn, $sql3);
    }
    else
        if (($user2 == $usuario)&&($password2 == $senha)){

        echo "<script>javascript:window.location='/paciente.php';</script>";

        $sql4 = "UPDATE login SET confirmacao='1';";
        mysqli_query($conn, $sql4);
    }
    else{
        echo "<script>alert('LOGIN INCORRETO !');javascript:window.location='/index.php';</script>";
    }

    mysqli_close($conn);

?>