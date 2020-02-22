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
            if (isset($_POST['sessao'])) {  
                $valor = $_POST['valor'];
                if($valor){
                print "<br>Valor da SESSION => $valor<br><br>";
                session_start();
                $_SESSION['string'] = $valor;
                echo "<a href='./teste07-2.php'>Próx Pagina</a>";
                }else{
                    echo "<br>Digite Algo ..";
                }
            }
            if (isset($_POST['cookie'])) {  
                $valor = $_POST['valor'];
                if($valor){
                print "<br>Valor da Cookie => $valor ,<br>tempo: 1min<br><br>";
                setcookie('string',$valor,time()+60,"/");                
                echo "<a href='./teste07-2.php'>Próx Pagina</a>";
                }else{
                    echo "<br>Digite Algo ..";
                }
            }
            ?>
        </fieldset>
    </form>
</body>

</html>