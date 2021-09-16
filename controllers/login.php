<?php
$conn= include_once "../config/connection.php";

$user= $_GET['username'];
$pass =$_GET['password'];

$sentns = $conn->prepare("select TEACHER_ID, TEACHER_NAME from teachers where TEACHER_ID=? AND TEACHER_NAME=? ");
$sentns->bind_param("is", $pass, $user);
$sentns->execute();
header("Location: ../public/home.html");