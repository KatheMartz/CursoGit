<?php

// Obteniendo variable de conexion a la BD
$conexion = include_once "../config/connection.php";

// Obteniendo los datos de los inputs
// por medio de sus propiedades 'name'
$nombre = $_POST['username'];
$password = $_POST['password'];
$classname = $_POST['classname'];
$level = $_POST['level'];

// Preparar la sentencia
$sentencia = $conexion->prepare("INSERT INTO teachers(TEACHER_ID, TEACHER_NAME, CLASSROOM, DEPTO) VALUES(?,?,?,?)");

// Pasar los parametros requeridos
$sentencia->bind_param("isii", $password, $nombre, $classname, $level);

// Ejecutar nuestra sentencia
$sentencia->execute();

// Redirigir al usuario a la pagina principal.
header("Location: ../Index.php");