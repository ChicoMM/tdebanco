<?php
include "conn.php";


$id = $_POST['id'] ?? null;


$sql = "SELECT * FROM Usuarios WHERE id='$id'";
$result = $con->query($sql);
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $nome = $row["nome"];
    $email = $row["email"];
    $senha = $row["senha"];
    $idade = $row["idade"];
    echo '<p>Id: '.$id.'</p>';
    echo '<p>Nome: '.$nome.'</p>';
    echo '<p>Email: '.$email.'</p>';
    echo '<p>Senha: '.$senha.'</p>';
    echo '<p>Idade: '.$idade.'</p>';
};
echo '<button onclick="window.location.href=\'front.php\'">Voltar</button>';

