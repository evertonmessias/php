<?php
class Home
{
    public function index()
    {
        echo "Pagina Home";
    }
}
class Inserir
{
    public function index()
    {
        print "<fieldset><legend>INSERIR</legend>";
        //$sis->lista($sis->tabela, 'consultar', $sis->conexao());
        print "<form method='post'><br><br>
<input type='text' id='nome' placeholder='Nome'><br>
<input type='text' id='tel' placeholder='Telefone'><br>
<input type='text' id='email' placeholder='E-Mail'><br><br>
<button type='button' id='botaoinserir' class='btn btn-primary'>Inserir</button><br><br>
    </form>
    </fieldset>";
    }
}
class Apagar
{
    public function index()
    {
        print "<fieldset><legend>APAGAR</legend>";
        //$sis->lista($sis->tabela, 'apagar', $sis->conexao());
        print "<form method='post'><br><br><div id='apagar'>
            <span class='confirma'>Confirma ?</span><br> 
            <button type='button' id='botaoapagar' class='btn btn-danger'>Apagar</button><br><br>
            </form>
            </div>
            </fieldset>";
    }
}
class Alterar
{
    public function index()
    {
        print "<fieldset><legend>ALTERAR</legend>";
        //$sis->lista($sis->tabela, 'alterar', $sis->conexao());
        print "<form method='post'><br><br><div id='alterar'>
    <input type='text' id='anome' placeholder='Digite Novo Nome'><br>
    <input type='text' id='atel' placeholder='Digite Novo Telefone'><br>
    <input type='text' id='aemail' placeholder='Digite Novo E-Mail'><br>
    <br>
    <button type='button' id='botaoalterar' class='btn btn-warning'>Alterar</button><br><br>
    </form>
    </div>
    </fieldset>";
    }
}
class Contatos
{
    public function index()
    {
        print "
    <fieldset><legend>CONTATOS</legend><form method='post'><br><br>
    <input type='text' id='cnome' placeholder='Nome'required><br>
    <input type='text' id='cemail' placeholder='E-Mail'required><br>
    <textarea id='cmsg' cols='45' rows='8' placeholder=' Mensagem' required></textarea>
    <br><br><button type='button' id='botaocontatos' class='btn btn-primary'>Enviar</button><br><br>
    </form></fieldset>";
    }
}
class Sair
{
    public function index()
    {
        print " <fieldset><legend>SAIR</legend></fieldset>";
        //$_SESSION['snome'] = null;
        //unset($_SESSION['snome']);
        //session_destroy();
        //print "<script>window.location.href='index.php'</script>";
    }
}
class Erro
{
    public function index()
    {
        echo "ERRO, PAGINA NÃO ENCONTRADA";
    }
}
