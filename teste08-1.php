<?php 				// Ex. Login
session_start();
$user = $_POST['user'];$pass = md5($_POST['pass']);
$conexao = mysqli_connect("localhost","root","efc2505xx","testes"); // conecta
$sql = "SELECT * FROM login WHERE user = '$user' AND pass= '$pass'";
$result = mysqli_query($conexao,$sql);
if(mysqli_num_rows($result) > 0 ){
$_SESSION['user'] = $user;
$_SESSION['pass'] = $pass;
header('location:./teste08-2.php');
}
else{
unset ($_SESSION['user']);
unset ($_SESSION['pass']);
header('location:./teste08.html');
}
?>