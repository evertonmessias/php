<?php                 // Ex. Login
include 'config.inc';
$user = $_POST['user'];
$pass = md5($_POST['pass']);
$conexao = mysqli_connect($servidor, $usuario, $senha, $tabela); // conecta
$sql = "SELECT * FROM login WHERE user = '$user' AND pass= '$pass'";
$result = mysqli_query($conexao, $sql);
if (mysqli_num_rows($result) > 0) {
    session_start();
    $_SESSION['user'] = $user;
    $_SESSION['pass'] = $pass;
    header('location:./teste08-2.php');
} else {
    header('location:./teste08.html');
}
