<html>
<head>
    <title>temp</title>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="estilo.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="funcoes.js"></script>
</head>

<body><div id="quadro"><div id="mensagem"></div></div><br>
    <fieldset id="login">
        <legend>LOGIN</legend><br>
        <form method="POST">
            <input type="text" id="nome" placeholder="Nome"><br>
            <input type="password" id="senha" placeholder="Senha"><br>
            <p>
            <label><input type="radio" name="server" value="i">&ensp;Servidor Interno</label><br>
            <label><input type="radio" name="server" value="e">&ensp;Servidor Externo</label>
            </p><br>
            <button type="button" id="botaologin" class="btn btn-primary">ENTRAR</button>
        </form>
    </fieldset>    
</body>

</html>