<?php
include "conn.php";


$nome = $_POST['nome'] ?? null;
$email = $_POST['email'] ?? null;
$senha = $_POST['senha'] ?? null;
$idade = $_POST['idade'] ?? null;

$sql = "INSERT INTO Usuarios(nome,email,senha,idade) VALUES('$nome','$email','$senha','$idade')";

$result = $con->query(query: $sql);

header("Location: front.php");