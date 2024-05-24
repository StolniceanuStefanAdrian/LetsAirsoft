<?php
$nume=$_POST['nume'];
$email=$_POST['email'];
$subiect=$_POST['subiect'];
$mesaj=$_POST['mesaj'];

$conn = new mysqli('localhost','root','','letsairsoft');
if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}else{
    $srmr = $conn->prepare("insert into registration(nume, email, subiect, mesaj)
    values(?, ?, ?, ?)")
    $stmt->bind_param("ssss",$nume, $email, $subiect, $mesaj);
    $stmt->execute();
    echo "registration SUccessfully...";
    $stmt->close();
    $conn->close();
}
?>