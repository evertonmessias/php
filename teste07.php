<html>

<head>
    <style type="text/css">
        fieldset {
            display: block;
            position: relative;
            margin: 0 auto;
            width: 250px;
            height: 100px;
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
            <legend>Session</legend>
            <p><input type="text" name="valor" placeholder="Digite Algo.." /></p>
            <p><input type="submit" name="ativar" value="ATIVAR" /></p>
        </fieldset>
        <br><br>
        <fieldset>
            <?php
            if (isset($_POST['ativar'])) {  
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
            ?>
        </fieldset>
    </form>
</body>

</html>