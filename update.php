<?php
include './connection/conexion.php';

$nombre = $_POST['nombre'];
$ap_paterno = $_POST['ap_paterno'];
$ap_materno = $_POST['ap_materno'];
$fecha_nacimiento = $_POST['fecha_nacimiento'];
$correo_electronico = $_POST['correo_electronico'];
$telefono = $_POST['telefono'];
$id_cliente = $_POST['id_cliente'];


//$query = "UPDATE clientes SET nombre = '$nombre', ap_paterno = '$ap_paterno', 
//ap_materno = '$ap_materno', fecha_nacimiento = '$fecha_nacimiento', correo_electronico = '$correo_electronico' ,telefono = '$telefono' WHERE id_cliente = '$id_cliente'";
$query = "call tb_clientes.sp_actualizar_cliente('$id_cliente', '$nombre', '$ap_paterno', '$ap_materno', '$fecha_nacimiento', '$correo_electronico', '$telefono')";

$update = $conexion -> query($query);

header('Location: ./index.php' );

?>

