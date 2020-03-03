<?php                 // Ex. Login
include './config.php';
include './teste08-config.php';

$user = $_POST['user'];
$pass = md5($_POST['pass']);
$server = $_POST['server'];
$tabela1 = 'login';
$tabela2 = 'pessoas';
servidor($server);
// conexão com PDO
$dsn = "mysql:dbname=" . banco . ";host=" . servidor . "";
try {
    $conexaoPDO = new PDO($dsn, usuario, senha);
} catch (Exception $e) {
    echo "<p>ERRO ao se conectar</p>";
    echo "<p>" . $e->getMessage() . "</p>";
}
if (consulta($conexaoPDO,$tabela1,'user',$user) && (consulta($conexaoPDO,$tabela1,'pass',$pass))) {
    session_start();
    $_SESSION['user'] = $user;
    $_SESSION['server'] = $server;
    //header('location:./teste08-2.php');
    echo "<script>window.location.href = './teste08-site.php'</script>";
} else {
    echo "Usuario ou Senha inválidos!";
}

    /* 
    Observações:
    $e->getMessage(), getCode() , getLine() , getFile(), getTrace(array com todos os erros) 
    $result = $conexaoPDO->query($sql0); // inseguro !!!      
    $result->bindParam(":nnome", $nnome, PDO::PARAM_STR); // subtituido pelo execute(array())
    */
