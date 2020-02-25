<?php                 // Ex. Login
include 'config.php';
$user = $_POST['user'];
$pass = md5($_POST['pass']);
$server = $_POST['server'];
servidor($server);
$conexao = mysqli_connect(servidor, usuario, senha, banco); // conecta
$sql = "SELECT * FROM login WHERE user = '$user' AND pass= '$pass'";
$result = mysqli_query($conexao, $sql);
if (mysqli_num_rows($result) > 0) {
    session_start();
    $_SESSION['user'] = $user;
    $_SESSION['server'] = $server;
    //header('location:./teste08-2.php');
    echo "<script>window.location.href = './teste08-site.php'</script>";
} else {
    echo "Usuario ou Senha inválidos!";
}
