<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="refresh" content="0; url=index.php">
	<title>Document</title>
</head>
<body>
<?php
	$host = "127.0.0.1";
	$username = "root";
	$password = "";
	// Diretório: opt/lampp/var/mysql/
	$dbase = "senhas";

	$nome = $_POST['nome'];
	$nomecad = '';

	try {
		$conn = new PDO("mysql:host=$host;dbname=$dbase", $username, $password);
		
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$data = $conn->query("CREATE TABLE IF NOT EXISTS cadastro(id int NOT NULL AUTO_INCREMENT, nome varchar(40) NOT NULL UNIQUE)DEFAULT charset = utf8");
		$data = $conn->prepare('SELECT * FROM cadastro WHERE nome = :nome');
		$data->execute(array('nome' => $nome));
		$result = $data->fetchAll();
		if ( count($result) ) {
			foreach($result as $row) {
				$nomecad = $row[1];
			}

		}
		if ($nomecad == $nome) {
			echo "<script>alert('O nome já foi cadastrado por outra pessoa.')</script>";
		}
		else{
			$data = $conn->query("INSERT INTO cadastro (nome) VALUES ('$nome')");
		}

		unset($data);

	}catch(PDOException $e) {
		echo 'ERROR: ' . $e->getMessage();
	}
?>	
</body>
</html>
