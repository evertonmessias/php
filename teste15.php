<!DOCTYPE html>
<html>
    <head>
        <title>SEGURANÇA 1</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script></script>
    </head>
    <body>
        <form method="GET">
            Comando: <input type="text" name="valor"/><br><br>
            <input type="submit" value="Enviar"/><br><br>
        </form>
        
        <?php
        $valor = @$_GET['valor'];
        echo "<strong>Comando: $valor</strong>";
        //echo "<pre>";system($valor);echo "</pre>";        
        ?>
        
    </body>
</html>
