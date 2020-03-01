<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width">
    <title>EQUACAO 2oGRAU com PHPOO e JQ</title>
    <style type="text/css">
        body {
            margin: 0;
            padding: 0;
            background-color: #ccc;
            font-family: Arial;
            font-size: 18px;
        }

        #form,
        .campo,
        #botao,
        #botao2,
        #resposta,
        #titulo,
        .erro,
        #caderno {
            display: block;
            position: relative;
        }

        #form,
        #caderno {
            background-color: #ddd;
            top: 50px;
            margin: 0px auto;
            width: 300px;
            
            border-radius: 5px;
        }
        #form{
            height: 410px;
        }

        #caderno {
            width: 300px;
            min-height: 100px;
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
            height: 100px;
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

        .resp {
            height: 25px;
            line-height: 25px;
            font-size: 16px;
        }

        .caderno {
            font-size: 12px;
        }

        span {
            font-size: 14px;
        }

        #erro {
            display: none;
            z-index: 1000;
            position: absolute;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.8);
        }

        .erro {
            color: #f00;
            text-align: center;
            top: 100px;
            margin: 0 auto;
            width: 400px;
            height: 100px;
            line-height: 100px;
            background-color: #fff;
            border: 1px solid #ff0000;
            border-radius: 3px;
            padding: 5px;
        }
    </style>
    <script src="./jquery.js"></script>
    <script>
        $(function() {
            $('#erro').click(() => {
                $('#erro').fadeOut(100);$('#a').focus();
            })
            $('#botao2').click(()=>{
                $('#a').val("");$('#b').val("");$('#c').val("");
                $('#resposta').slideUp(100);$('#a').focus();
            })
            $('#botao').click(() => {
                if ($('#a').val() == "" || $('#b').val() == "" || $('#c').val() == "") {
                    $('#resposta').slideUp(500);
                    $('#erro').fadeIn(500);
                    $('#a').focus();
                    return false;
                } else {
                    var a = $('#a').val();
                    var b = $('#b').val();
                    var c = $('#c').val();
                    $.post("./teste11-2.php", {
                        a: a,
                        b: b,
                        c: c
                    }, function(mostrar) {
                        $('#resposta').slideUp(0).slideDown(500).html(mostrar).addClass('resp');
                        $('.linhas').append(mostrar + '<hr>').addClass('caderno');
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
            <br>
            <p class="campo">Valor A:&ensp;<input type="number" min="-100" max="100" id="a" step="0.1" placeholder=" digite o valor A" required /></p><br>
            <p class="campo">Valor B:&ensp;<input type="number" min="-100" max="100" id="b" step="0.1" placeholder=" digite o valor B" required /></p><br>
            <p class="campo">Valor C:&ensp;<input type="number" min="-100" max="100" id="c" step="0.1" placeholder=" digite o valor C" required /></p>
            <p><input type="button" id="botao" value="CALCULAR" />
                <input type="button" id="botao2" value="APAGAR" /></p>
            <br>
            <fieldset id="resposta"></fieldset>
        </fieldset>
        <fieldset id="caderno">
            <legend>
                <h5>Ultimos Cálculos</h5>
            </legend>
            <div class="linhas"></div>
        </fieldset>
    </form>
</body>

</html>