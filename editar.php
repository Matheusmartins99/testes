<?php

include "conexao.php";

$id = $_POST['id'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$senha = $_POST['senha']; 

$atualizando_pessoas = "UPDATE usuarios SET nome = '$nome', email = '$email', telefone = '$telefone', senha = '$senha' WHERE id = '$id' ";

$query_pessoas = mysqli_query($conection, $atualizando_pessoas);

header('location:lista_pag.php');


?>