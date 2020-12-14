<?php

include ("conexion.php");
$conectar=$conexion->query("SELECT * FROM usuarios")->fetchAll(PDO::FETCH_OBJ);
if(isset($_POST["bt"])){

$NomUsuario=$_POST["ide"];
$Clave=$_POST["nom"];
$Email=$_POST["ape"];
$Sexo=$_POST["esp"];
$FNacimiento=$_POST["eso"];
$Cuidad=$_POST["esl"];
$Pais=$_POST["esv"];
$Foto=$_POST["esd"];
$FRegistro=$_POST["esc"];


$sql="INSERT INTO usuarios (NomUsuario,Clave,Email,Sexo,FNacimiento,Ciudad,Pais,Foto,FRegistro) VALUE (:ide, :nom, :ape, :esp,:eso,:esl,:esv,:esd,:esc)";
$resultado=$conexion->prepare($sql);
$resultado->execute(array(":ide"=>$NomUsuario, ":nom"=>$Clave, ":ape"=>$Email,":esp"=>$Sexo, ":eso"=>$FNacimiento, ":esl"=>$Cuidad,":esv"=>$Pais,":esd"=>$Foto,":esc"=>$FRegistro ));
header("Location:form-usuario.html");

}
?>
