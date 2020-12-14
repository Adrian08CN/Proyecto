<!DOCTYPE html>
<html>
<body>
	
<center><h1></h1>
<?php 
$server ='localhost';
$username ='root';
$password = '';
$datebase = 'proyecto';

try {
$conexion= new PDO("mysql:host=$server;dbname=$datebase;",$username, $password);
$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {

}

?>

</body>
</html> 