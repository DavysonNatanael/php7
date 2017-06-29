<?php 

$conn = new PDO("mysql:host=localhost; dbname=dbphp7", "root", "");

$sql = "UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :PASSWORD WHERE idusuario = :ID";

$stmt= $conn->prepare($sql);

$id = 1;
$login = "Davyson";
$password = "1234567890";

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);
$stmt->bindParam(":ID", $id);

$stmt->execute();

echo "Usuário $login atualizado com sucesso";

?>