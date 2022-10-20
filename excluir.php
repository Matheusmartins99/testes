<?php

include "conexao.php";

$id = $_POST['id'];

$deletar_pessoas = "DELETE FROM usuarios WHERE id = '$id'";

$query_delete_pessoas = mysqli_query($conection, $deletar_pessoas);

header('location:lista_pag.php');


?>