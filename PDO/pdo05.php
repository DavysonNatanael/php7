<?php 

$conn = new PDO("mysql:host=localhost; dbname=dbphp7", "root", "");

$sql = "DELETE FROM tb_usuarios WHERE idusuario = :ID";

$stmt= $conn->prepare($sql);

$id = 5;

$stmt->bindParam(":ID", $id);

$stmt->execute();

echo "Usuário deletado com sucesso";

?>