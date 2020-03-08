<?php
include 'config.php';
include 'db.php';

if(isset($_POST['botaoinserir'])){
    Db::inserir();
}
if(isset($_POST['botaoalterar'])){
    Db::alterar();
}
if(isset($_POST['botaoapagar'])){
    Db::apagar();
}
if(isset($_POST['botaocontatos'])){
    Db::contatos();
}
if(isset($_POST['botaologin'])){
    Db::login();
}

