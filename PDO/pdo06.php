<?php 

$conn = new PDO("mysql:host=localhost; dbname=dbphp7", "root", "");

$conn->beginTransaction();

$sql = "DELETE FROM tb_usuarios WHERE idusuario = ?";

$stmt= $conn->prepare($sql);

$id = 6;

$stmt->execute(array($id));

//$conn->rollback();
$conn->commit();

echo "Usuário deletado com sucesso";

?>