<?php 

$conn = new PDO("mysql:dbname=dbphp7; host=localhost", "root", "");

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