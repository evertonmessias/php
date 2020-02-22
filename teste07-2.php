<?php
// Session
session_start();
if (isset($_SESSION['string'])) {
    $val = $_SESSION['string'];
    if (isset($_POST['destruir'])) {
        unset($_SESSION['string']);
        print "<p>Session destruida !!</p>";
    } else {
        print "<p>O valor da Session é ==> $val</p>";
    }
    print "<form method='post'><button type='submit' name='destruir'>Destruir</button></form>";
}
// Cookie
if (isset($_COOKIE['string'])) {
}
echo "<br><a href='./teste07.php'><b><= Voltar</b></a>";
?>