<?php
if (!isset($_SESSION['user'])) {
    header('location:./teste08.php');
} else {
    echo "<h2>HOME</h2>";    
}
?>
