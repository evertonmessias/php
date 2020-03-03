<?php                 // Ex. Login
include './config.php';
include './teste08-config.php';

$user = $_POST['user'];
$pass = md5($_POST['pass']);
$server = $_POST['server'];
servidor($server);
// conexão com PDO

if (consulta(conexaoPDO(),$tabela1,'user',$user) && (consulta(conexaoPDO(),$tabela1,'pass',$pass))) {
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
