<?php 

$conn = new mysqli("localhost", "root", "", "dbphp7");

if ($conn->connect_error) {
	Echo "Error: " . $conn->connect_error;
}

$sql = "INSERT INTO tb_usuarios (deslogin, dessenha) VALUES (?, ?)";

$stmt = $conn->prepare($sql);

$stmt->bind_param("ss", $login, $pass);

$login = "user";
$pass = "12345";

$stmt->execute();

$login = "root";
$pass = "15975";

$stmt-> execute();

?>