<?php
include "conn.php";

$id = $_POST['id'] ?? null;
$nome = $_POST['nome'] ?? null;
$email = $_POST['email'] ?? null;
$senha = $_POST['senha'] ?? null;
$idade = $_POST['idade'] ?? null;

$sql = "UPDATE Usuarios SET nome='$nome',email='$email',senha='$senha',idade='$idade' WHERE id='$id'";

$result = $con->query(query: $sql);

header("Location: front.php");