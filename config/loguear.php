<?php

require 'db.php';
session_start();

$usuario = $_POST['Usuario'];
$password = $_POST['Password'];

$query = "SELECT COUNT(*) as contar from login where usuario = '$usuario' and clave = '$password'";
$consulta = mysqli_query($conexion, $query);
$array = mysqli_fetch_array($consulta);

if($array['contar'] > 0){
    $_SESSION['username'] = $usuario;
    header("location: ../main.php");
} else {
    echo'<script type="text/javascript">
    alert("Datos invalidos");
    </script>';
}

?>