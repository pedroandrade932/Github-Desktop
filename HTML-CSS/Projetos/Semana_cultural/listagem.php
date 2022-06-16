<?php
$host = "127.0.0.1";
$username = "root";
$password = "";
// Diretório: opt/lampp/var/mysql/
$dbase = "senhas";

$nome = $_POST['nome'];

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbase", $username, $password);
    
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    
	$data = $conn->query("INSERT INTO cadastro (nome) VALUES ('$nome')");

	unset($data);

}catch(PDOException $e) {
      echo 'ERROR: ' . $e->getMessage();
}
