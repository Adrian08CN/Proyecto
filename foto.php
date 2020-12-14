
<?php

include ("conexion.php");
$conectar=$conexion->query("SELECT * FROM tabla_fotos")->fetchAll(PDO::FETCH_OBJ);
if(isset($_POST["bt"])){

$titulo=$_POST["ide"];
$fecha=$_POST["nom"];
$pais=$_POST["ape"];
$album=$_POST["esp"];
$fichero=$_POST["eso"];
$fregistro=$_POST["esi"];

$sql="INSERT INTO tabla_fotos (Titulo,Fecha,Pais,Album,Fichero,FRegistro) VALUE (:ide, :nom, :ape, :esp,:eso,:esi)";
$resultado=$conexion->prepare($sql);
$resultado->execute(array(":ide"=>$titulo, ":nom"=>$fecha, ":ape"=>$pais,":esp"=>$album, ":eso"=>$fichero, ":esi"=>$fregistro ));
header("Location:form_foto.html");

}
?>