<?php
include "conn.php";


$id = $_POST['id'] ?? null;


$sql = "DELETE FROM Usuarios WHERE id='$id'";

$result = $con->query(query: $sql);

header("Location: front.php");