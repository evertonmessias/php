<?php
include 'includes.php';
include '../config.php';
$sis = new Sistema;
$sis->sessaoo(); 
$sis->erro();
?>
<html>

<head>
    <title>temp</title>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="estilo.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="funcoes.js"></script>
</head>
<body><br>
    <fieldset>
        <legend>SISTEMAOO</legend>        
            <button type="button" onclick="window.location.href='?p=inserir'" class="btn btn-success">Inserir</button>&ensp;            
            <button type="button" onclick="window.location.href='?p=apagar'" class="btn btn-danger">Apagar</button>&ensp;
            <button type="button" onclick="window.location.href='?p=alterar'" class="btn btn-warning">Alterar</button>&ensp;
            <button type="button" onclick="window.location.href='?p=contatos'" class="btn btn-secondary">Contatos</button>&ensp;
            <button type="button" onclick="window.location.href='?p=sair'" class="btn btn-dark">Sair</button>
            <br><br>
        </fieldset>
        <br><br>
        <?php        
        $pag = @$_GET['p'];
        switch($pag){
            case 'inserir':
            print "<fieldset><legend>INSERIR</legend>";
            $sis->lista($sis->tabela, 'consultar', $sis->conexao());
            print "<form method='post'><br><br>
                <input type='text' id='nome' placeholder='Nome'><br>
                <input type='text' id='tel' placeholder='Telefone'><br>
                <input type='text' id='email' placeholder='E-Mail'><br><br>                
                <button type='button' id='botaoinserir' class='btn btn-primary'>Inserir</button><br><br>
            </form>
            </fieldset>";
            break;            
            case 'apagar':
            print "<fieldset><legend>APAGAR</legend>";
            $sis->lista($sis->tabela, 'apagar', $sis->conexao());
            print "<form method='post'>";
            print "<br><br><div id='apagar'>
            <span class='confirma'>Confirma ?</span><br> 
            <button type='button' id='botaoapagar' class='btn btn-danger'>Apagar</button><br><br>
            </form>
            </div>
            </fieldset>";
            break;
            case 'alterar':
            print "<fieldset><legend>ALTERAR</legend>";
            $sis->lista($sis->tabela, 'alterar', $sis->conexao());
            print "<form method='post'><br><br><div id='alterar'>
            <input type='text' id='anome' placeholder='Digite Novo Nome'><br>
            <input type='text' id='atel' placeholder='Digite Novo Telefone'><br>
            <input type='text' id='aemail' placeholder='Digite Novo E-Mail'><br>
            <br>
            <button type='button' id='botaoalterar' class='btn btn-warning'>Alterar</button><br><br>
            </form>
            </div>
            </fieldset>";
            break;
            case 'contatos':
            print "
            <fieldset><legend>CONTATOS</legend><form method='post'>
            <input type='text' id='cnome' placeholder='Nome'required><br>
            <input type='text' id='cemail' placeholder='E-Mail'required><br>
            <textarea id='cmsg' cols='45' rows='8' placeholder=' Mensagem' required></textarea>
            <br><br><button type='button' id='botaocontatos' class='btn btn-primary'>Enviar</button><br><br>
            </form></fieldset>";
            break;
            case 'sair':            
            $_SESSION['snome'] = null;    
            unset($_SESSION['snome']);
            session_destroy();
            print "<script>window.location.href='index.php'</script>";
            break;
            default:
            print "<br><div id='capa'><h1>BEM VINDO</h1>";
            print "<p>".$_SESSION['snome']."</p></div>";
        }
        ?>       
</body>

</html>