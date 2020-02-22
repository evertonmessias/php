<html>
<head>
    <style type="text/css">
        fieldset {
            display: block;
            position: relative;
            margin: 0 auto;
            width: 250px;
            height: 150px;
            top: 50px;
            text-align: center;
        }

        input {
            width: 200px
        }

        a {
            text-decoration: none;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <form method="post">
        <fieldset>
            <legend>Cookie & Session</legend>
            <p><input type="text" name="valor" placeholder="Digite Algo.." /></p>
            <p><input type="submit" name="sessao" value="SESSÃO" /></p>
            <p><input type="submit" name="cookie" value="COOKIE" /></p>
        </fieldset>
        <br><br>
        <fieldset>
            <?php
            //Session - lado servidor
            if (isset($_POST['sessao'])) { 
                if($_POST['valor']){
                print "<p>Valor da SESSION =>". $_POST['valor'];"</p><br>";
                session_start();
                $_SESSION['strsessao'] = $_POST['valor'];
                echo "<p><a href='./teste07-2.php'>Próx Pagina</a></p>";
                }else{
                    echo "<p>Digite Algo ..</p>";
                }
            }
            // Cookie - lado cliente
            if (isset($_POST['cookie'])) {
                if($_POST['valor']){
                print "<p>Valor da Cookie =>". $_POST['valor']."<br>(tempo: 1min)</p>";
                setcookie('strcookie',$_POST['valor'],time()+60,"/");                
                echo "<p><a href='./teste07-2.php'>Próx Pagina</a></p>";
                }else{
                    echo "<p>Digite Algo ..</p>";
                }
            }
            ?>
        </fieldset>
    </form>
</body>

</html>