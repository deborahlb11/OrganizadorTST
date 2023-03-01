<?php
$userc = filter_var($_REQUEST['userc'], FILTER_SANITIZE_STRING);
$senhac = filter_var($_REQUEST['senhac'], FILTER_SANITIZE_STRING);

$con= mysqli_connect('localhost','root','','login'); // mudar as informações quando  for hospedar

$sql = "INSERT INTO user (login,senha) VALUES ('$userc','$senhac')";
$res = mysqli_query($con, $sql);

  header('Location:login.html');  
?>