<?php
$host="localhost";
$user="root";
$pass="pabykat";
$db="score_db";
$conn=new mysqli($host,$user,$pass,$db);

if($conn->connect_errno) {
    die("La conexion a fallado");
}
echo "Conexion con exito.!!";

return $conn;