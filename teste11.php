<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width">
    <title>EQUACAO 2oGRAU com PHPOO e JQ</title>
    <style type="text/css">
        body {
            background-color: #ccc;
            font-family: Arial;
            font-size: 18px;
        }
        #form,
        .campo,
        #botao,
        #botao2,
        #resposta,
        #titulo {
            display: block;
            position: relative;
        }

        #form {
            background-color: #ddd;
            top: 50px;
            margin: 0px auto;
            width: 300px;
            height: 100%;
            border-radius: 5px;
        }

        .campo {
            width: 250px;
            margin-bottom: 15px;
            margin: 0 auto;
        }

        #a,
        #b,
        #c {
            width: 160px;
        }

        #a:hover,
        #b:hover,
        #c:hover {
            background-color: #ccc;
        }

        #botao,
        #botao2 {
            text-align: center;
            display: inline-block;
            width: 110px;
            margin-left: 18px;
            left: 10px;
        }

        #botao {
            font-weight: bold;
        }

        #resposta {
            text-align: center;
            display: none;
            width: 260px;
            margin: 0 auto;
            height: 100%;
            border-radius: 5px;
        }

        .resp,
        .titulo {
            text-align: center;
            background-color: #ccc;
            padding: 5px;
            margin: 0 auto;
            margin-top: 10px;
            border: 1px solid #aaa;
            border-radius: 3px;
            width: 230px;
        }

        span {
            font-size: 14px;
        }
        #erro { 
            z-index: 1000;
            position: absolute;           
            margin: 0;padding: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0,0,0,0.8);            
        }
        .erro {
            color: #f00;            
            position: absolute;
            text-align: center;
            top:100px;
            left: 43%;
            width: 200px;
            height: 50px;
            line-height: 50px;
            background-color: #fff;
            border: 1px solid #ff0000;
            border-radius: 3px;
            padding: 5px;
        }
    </style>
    <script src="./jquery.js"></script>
    <script>
        $(function() {
            $('#botao').click(function() {
                if ($('#a').val() == "" || $('#b').val() == "" || $('#c').val() == "") {
                    $('#resposta').slideUp(500);
                    $('#erro').slideUp(500).slideDown(500);
                    $('#a').focus();
                    return false;
                } else {
                    $('#erro').slideUp(500);
                    var botao = $('#botao').val();
                    var a = $('#a').val();
                    var b = $('#b').val();
                    var c = $('#c').val();
                    $.post("./teste13-2.php", {
                        a: a,
                        b: b,
                        c: c,
                        botao: botao
                    }, function(mostrar) {
                        $('#resposta').slideUp(0).slideDown(500).html(mostrar);
                    });
                }
            });
        });
    </script>
</head>

<body>
    <div id="erro">
        <div class="erro">&darr;&ensp;Digite os Valores&ensp;&darr;</div>
    </div>
    <form method="POST">
        <fieldset id="form">
            <h4 class="titulo">EQUAÇÃO&ensp;DO&ensp;2<sup>o</sup>&ensp;GRAU<br><span>Formato: Ax<sup>2</sup> + Bx + C = 0</span></h4>
            <p class="campo">Valor A:&ensp;<input type="number" min="-100" max="100" id="a" step="0.1" placeholder=" digite o valor A" required /></p><br>
            <p class="campo">Valor B:&ensp;<input type="number" min="-100" max="100" id="b" step="0.1" placeholder=" digite o valor B" required /></p><br>
            <p class="campo">Valor C:&ensp;<input type="number" min="-100" max="100" id="c" step="0.1" placeholder=" digite o valor C" required /></p>
            <p><input type="button" id="botao" value="CALCULAR" />
                <input type="reset" id="botao2" value="APAGAR" onClick="window.location.reload()" /></p>
            <fieldset id="resposta"></fieldset>
        </fieldset>
    </form>

</body>

</html>