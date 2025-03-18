<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carteirinha</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
<?php 
$frase = "Boa tarde!!! Por favor, ensira seus dados para fazermos sua carterinha de estudante";
echo "<h1>" . $frase . "</h1>";

if(isset ($_GET['nome'])){
$nome =  $_GET["nome"];
$instituicao = $_GET["instituição"];
$cse = $_GET["cse"];
$cpf = $_GET["cpf"];
$rg = $_GET["rg"];
$matricula = $_GET["matricula"];
$data = $_GET["data"];
$emi = $_GET["emi"];
$val = $_GET["val"];
?>

<div style="background-image: url('../imagens/carterinha photo.jpg');
background-repeat: no-repeat;
 background-size: 800px;
 height: 500px;

">

<?php

}else{
    $frase = "Boa tarde!!! Por favor, ensira seus dados para fazermos sua carterinha de estudante";
    $nome = " ";
    $instituicao = " ";
    $cse = " ";
    $cpf = " ";
    $rg = " ";
    $matricula = " ";
    $data = " ";
    $emi = " ";
    $val = " ";
}


?>

<div class="nome"><?php echo $nome ;?></div>
<div class="insti"><?php echo $instituicao ;?></div>
<div class="cse"><?php echo $cse ;?></div>
<div class="rg"><?php echo $rg ;?></div>

<div class="cpf"><?php echo $cpf ;?>
<spam class="mat"><?php echo $matricula ;?></spam>
<spam class="data"><?php echo  $data ;?></spam></div>

<div class="emi"><?php echo  $emi ;?>
<spam class="val"><?php echo $val ;?></spam></div>



</div>

<form>

    nome completo: <input type ="text" name="nome">
    <br>instituição de ensino: <input type ="text" name="instituição">
    <br>curso/ série/ ensino: <input type ="text" name="cse">
    <br>rg: <input type ="text" name="rg">
    <br>cpf: <input type ="text" name="cpf">
    <br>matricula: <input type ="date" name="matricula">
    <br>data de nascimento: <input type ="date" name="data">
    <br>emitida em: <input type ="date" name="emi">
    <br>validade: <input type ="date" name="val">
    <br> <input type ="submit" value="Fazer">

    
</form>
</body>
</html>


