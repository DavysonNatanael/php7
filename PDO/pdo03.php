<?php 

$conn = new PDO("mysql:host=localhost; dbname=dbphp7", "root", "");

$sql = "INSERT INTO tb_usuarios (deslogin, dessenha) VALUES (:LOGIN, :PASSWORD)";

$stmt= $conn->prepare($sql);

$login = "Davyson";
$password = "1234567890";

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);

$stmt->execute();

echo "Usuário $login cadastrado com sucesso";

?>