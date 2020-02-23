<?php
session_start();
if (isset($_SESSION['nome'])){
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title>Aulas JavaScript</title>

    <style type="text/css">
        body {
            background-color: #aaa;
            font-family: Arial;
        }

        #site {
            position: relative;
            display: block;
            top: 20px;
            background-color: #ccc;
            text-align: center;
            box-shadow: 2px 2px 5px black;
            width: 300px;
            border: 1px solid black;
            margin: 0 auto;
        }

        span {
            font-size: 10px;
            font-weight: bold;
        }

        fieldset {
            background-color: #fff;
            margin-top: -30px;
            width: 230px;
            margin: 0 auto;
            margin-bottom: 25px;
        }

        ul {
            list-style: none;
        }

        li {
            text-align: left;
            margin-left: -35px
        }

        a {
            color: blue;
            text-decoration: none;
        }

        a:hover {
            color: red;
        }

        @media (max-width: 720px) {
            body {
                font-size: 20px;
            }

            h1 {
                margin-left: 0px;
            }
        }
    </style>

    <script type="text/javascript"></script>

</head>

<body>
    <div id="site">
        <header>
            <hgroup>
                <h2>PHP e MySQL</h2>
            </hgroup>
            <nav>
                <fieldset>
                    <legend>
<h4>Exemplos</h4>
                    </legend>

                    <ul>
                    <!-- INICIO do /index.php -->
<li><a href="./index_aux.php?file=teste01.php" target="_blank">Teste 01 - Olá Mundo</a></li>
<li><a href="./index_aux.php?file=teste02.php" target="_blank">Teste 02 - Sintaxe Básica</a></li>
<li><a href="./index_aux.php?file=teste03.php" target="_blank">Teste 03 - Ex. IMC</a></li>
<li><a href="./index_aux.php?file=teste04.php" target="_blank">Teste 04 - Query String / Menu</a></li>
<li><a href="./index_aux.php?file=teste05.php" target="_blank">Teste 05 - CSS com PHP</a></li>
<li><a href="./index_aux.php?file=teste06.php" target="_blank">Teste 06 - Cookie & Session</a></li>
<li><a href="./index_aux.php?file=teste07.php" target="_blank">Teste 07 - Upload & File</a></li>
<li><a href="./index_aux.php?file=teste08.html" target="_blank">Teste 08 - MySQL</a></li>
<li><a href="./index_aux.php?file=teste09.php" target="_blank">Teste 09 - POO</a></li>
<li><a href="./index_aux.php?file=teste10.php" target="_blank">Teste 10 - ContaBanco</a></li>
<li><a href="./index_aux.php?file=teste11.php" target="_blank">Teste 11 - ControleRemoto</a></li>
<li><a href="./index_aux.php?file=teste12.php" target="_blank">Teste 12 - Relac Classes</a></li>
<li><a href="./index_aux.php?file=teste13.php" target="_blank">Teste 13 - Eq. 2ºGrau POO</a></li>
<li><a href="./index_aux.php?file=teste14.php" target="_blank">Teste 14 - Herança & Polim</a></li>
<li><a href="./index_aux.php?file=teste15.php" target="_blank">Teste 15 - Segurança</a></li>
                    <!-- FIM do /index.php -->
                    </ul>
                    <br>

                </fieldset>
            </nav>
        </header>

        <section>
            <article></article>
        </section>

        <aside>
            <article></article>
        </aside>

        <footer></footer>
    </div>
</body>

</html>
<?php
}else{
    header('location:./login.php');
}
?>