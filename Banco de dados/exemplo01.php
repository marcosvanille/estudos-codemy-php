<?php
$conn = new mysqli("localhost", "root","Mv@19960709" , "dbphp7");

if($conn-> connect_error){

    echo "ERROR" . $conn->connect_error;
}

$stmt = $conn->prepare("INSERT INTO  tb_usuarios (deslogin , dessenha) VALUES (?,?)");

$stmt->bind_param("ss" , $login , $pass);

$login = "user";
$pass = "123455";

$stmt->execute();

$login = "root";
$pass = "123";

$stmt->execute();

