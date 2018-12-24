<?php

session_start();

$id = $_SESSION['registro'];

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

$nasc = $_POST["nasc"];
$e_civil = $_POST["e_civil"];
$filiacao = $_POST["filiacao"];
$escolaridade = $_POST["escolaridade"];
$profissao = $_POST["profissao"];
$renda = $_POST["renda"];
$dependente = $_POST["dependente"];

$q_inicial = $_POST["q_inicial"];
$alteracao = $_POST["alteracao"];
$personalidade = $_POST["personalidade"];

$prontuario = $_POST["prontuario"];

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
else if($id != "") {
    $sql = "UPDATE tb_cadastro SET nome='$nome', sexo='$sexo', idade='$idade', cpf='$cpf', telefone='$telefone', celular='$celular', cep='$cep', bairro='$bairro', municipio='$municipio', endereco='$endereco', doenca='$doenca', medicamento='$medicamento', sintoma='$sintoma', acompanhamento='$acompanhamento', h_alimentar='$h_alimentar', familia='$familia', evento='$evento', social='$social', h_lazer='$h_lazer', grupo='$grupo', reprovacao='$reprovacao', dificuldade='$dificuldade', h_estudo='$h_estudo', nasc='$nasc', e_civil='$e_civil', filiacao='$filiacao', escolaridade='$escolaridade', renda='$renda', dependente='$dependente', q_inicial='$q_inicial', alteracao='$alteracao', personalidade='$personalidade', profissao='$profissao', prontuario='$prontuario' WHERE id='$id'";
    $query = mysqli_query($conn, $sql);
}

mysqli_close($conn);

?>

<script>
    alert('Os dados do paciente foram atualizados com sucesso !');
    javascript:window.location='/cadastrados.php';
</script>


