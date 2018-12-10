<?php

    $name = $_POST["name"];
    $age = $_POST["age"];


    include "conexao.inc";

    $sql = "INSERT INTO tb_cadastro (nome, idade) VALUES ('$name', '$age')";

    $query = mysqli_query($conn, $sql);

    mysqli_close($conn);

?>

    <script>
        alert('Cadastro Realizado !');
        javascript:window.location='cadastro.php';
    </script>



