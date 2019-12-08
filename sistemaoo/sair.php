<?php
session_start();
$_SESSION['snome'] = null;    
unset($_SESSION['snome']);
session_destroy();
print "<script>window.location.href='index.php'</script>";
