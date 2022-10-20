<?php

include "conexao.php";

$data = json_decode(file_get_contents('php://input'), true);

$nome = $data['nome'];
$email = $data['email'];
$telefone = $data['telefone'];
$senha = $data['senha'];


$salt ='my_string';
$hash = md5($salt . $senha);

$recebendo_pessoas = "INSERT INTO  usuarios VALUES (NULL, '$nome', '$email', '$telefone', '$hash')";

$query_pessoas = mysqli_query($conection, $recebendo_pessoas);

if($query_pessoas) {
    echo 'sucesso';
} else {
    echo 'error';
}
?>