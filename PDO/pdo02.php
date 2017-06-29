<?php 

$conn = new PDO("sqlsrv:Database=dbphp7; server=DAVI-NOTEBOOK\SQLEXPRESS;ConnectionPooling=0", "", "");

$sql = "SELECT * FROM tb_usuarios ORDER BY idusuario";

$stmt = $conn->prepare($sql);

$stmt->execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($results as $row) {
	
	foreach ($row as $key => $value) {
		
		echo "<strong>$key</strong>: $value <br>";

	}

	echo "=========================================<br>";

}

?>