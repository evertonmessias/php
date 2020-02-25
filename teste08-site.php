<?php
namespace inicio;
namespace fim;
include 'htmlcss.php';
include 'config.php';
echo \inicio\site();
if (sessao_mysql()) {
    $user = $_SESSION['user'];
    $server = $_SESSION['server'];
    servidor($server);
    $conexao = mysqli_connect(servidor, usuario, senha, banco); // conecta
}
?>
<fieldset id='menu'>
<form method='GET'>
<ul class='menu'>
<li><a href='?p=home'>Home</a></li>
<li><a href='?p=users'>Usuarios</a></li>
<li><a href='?p=pessoas'>Pessoas</a></li>
<li><a href='?p=sair'>Sair</a></li>
</ul>
</form>
</fieldset>
<br><br><br><hr><br><br>
<section id="sitemysql">
<?php
$pagina = @$_GET['p'];
switch($pagina) {
	case 'home':
	include('./teste08-home.php');
	break;
	case 'users':
	include('./teste08-users.php');
	break;
	case 'pessoas':
	include('./teste08-pessoas.php');
    break;
    case 'sair':    
    unset($_SESSION['user']);
    unset($_SESSION['server']);
    session_destroy();
    echo "<script>window.location.href = './teste08.php'</script>";
    break;
	default:
	include('./teste08-home.php');
	break;
}
?>
</section>
<?php
echo \fim\site();
?>