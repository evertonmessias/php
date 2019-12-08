<?php

$nome = $_POST['nome'];
$email = $_POST['email'];
$msg = $_POST['msg'];

$eu = 'everton.messias@gmail.com';
$assunto = 'Mensagem do Site';

$enviar = mail($eu, $assunto, $msg, $email);

print "Nome: " . $nome . "<br>E-mail: " . $email . "<br><br>";

if ($enviar) {
    print "Mensagem Enviada com Sucesso !";
} else {
    print "Erro - Mensagem não Enviada !";
}
