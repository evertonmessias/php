<?php
// Session
session_id($_GET['PHPSESSID']); // antes do start !!!
session_start();
if (isset($_SESSION['strsessao'])) {    
    if (!isset($_POST['destruirS'])) {
        if(!isset($_COOKIE['PHPSESSID'])){
            echo "<p>(Cookies desativados !!!)</p>";
        }else{
            echo "<p>(Cookies ativos !!!)</p>";
        }
        print "<p>O valor da Session é ==>". $_SESSION['strsessao']."</p>";        
    } else {
        unset($_SESSION['strsessao']);
        print "<p>Session destruida !!</p>";        
    }
    print "<form method='post'><button type='submit' name='destruirS'>Destruir</button></form>";
}
// Cookie
if (isset($_COOKIE['strcookie'])) {
    if (!isset($_POST['destruirC'])) {
        print "<p>O valor do Cookie é ==>". $_COOKIE['strcookie']."</p>";        
    } else {
        setcookie('strcookie',"",time()-1,"/");
        print "<p>Cookie destruido !!</p>";        
    }
    print "<form method='post'><button type='submit' name='destruirC'>Destruir</button></form>";
}
echo "<br><a href='./teste07.php'><b><= Voltar</b></a>";
?>