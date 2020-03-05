function alterar(x) {
    $('tr').css({ 'background-color': '#fff' });
    $('#alterar').css({ 'display': 'block' });
    $('#linha' + x).css({ 'background-color': '#ccc' });
    var nome = $(".tnome" + x).text();
    var telefone = $(".ttelefone" + x).text();
    var email = $(".temail" + x).text();
    $("#anome").val(nome);
    $("#atel").val(telefone);
    $("#aemail").val(email);

    $("#botaoalterar").click(function () {
        var idd = x;
        if ($("#anome").val().length < 2 || $("#aemail").val().length < 2 || $("#atel").val().length < 2) {
            $("#quadro").fadeIn(); $("#mensagem").html("Digite os campos corretamente !");
            $("#anome").val('').focus(); $("#aemail").val(''); $("#atel").val('');
            return false;
        }
        else {
            var nome = $("#anome").val();
            var email = $("#aemail").val();
            var tel = $("#atel").val();
            $.post("altera.php", { idd: idd, nome: nome, email: email, tel: tel }, function (mostrar) {
                $("#quadro").fadeIn(); $("#mensagem").html(mostrar);
            });
        }
    });
}

function apagar(x) {
    $('tr').css({ 'background-color': '#fff' });
    $('#apagar').css({ 'display': 'block' });
    $('#linha' + x).css({ 'background-color': '#ccc' });

    $("#botaoapagar").click(function () {
        var idd = x;
        $.post("apaga.php", { idd: idd }, function (mostrar) {
            $("#quadro").fadeIn(); $("#mensagem").html(mostrar);
        });
    });
}

$(function () {

    $("#quadro").click(function () {
        $(this).fadeOut();
    });

    $("#botaoinserir").click(function () {
        if ($("#nome").val().length < 2 || $("#email").val().length < 2 || $("#tel").val().length < 2) {
            $("#quadro").fadeIn(); $("#mensagem").html("Digite os campos corretamente !");
            $("#nome").val('').focus();
            $("#email").val(''); $("#tel").val('');
            return false;
        } else {
            var nome = $("#nome").val();
            var email = $("#email").val();
            var tel = $("#tel").val();
            $.post("inseri.php", { nome: nome, email: email, tel: tel }, function (mostrar) {
                $("#quadro").fadeIn(); $("#mensagem").html(mostrar);
            });
        }
    });

    $("#botaologin").click(function () {
        if ($("#nome").val().length < 2 || $("#senha").val().length < 2 ||
            !$("input[type='radio']:checked").val()) {
            $("#quadro").fadeIn(); $("#mensagem").html("Digite os campos corretamente !");
            $("#nome").val('').focus();
            $("#senha").val('');
            return false;
        } else {
            var nome = $("#nome").val();
            var senha = $("#senha").val();
            var server = $("input[type='radio']:checked").val();
            $.post("login.php", { nome: nome, senha: senha, server: server }, function (mostrar) {
                $("#quadro").fadeIn(); $("#mensagem").html(mostrar);
            });
        }
    });

    $("#botaocontatos").click(function () {
        if ($("#cnome").val().length < 2 || $("#cemail").val().length < 2 || $("#cmsg").val().length < 2) {
            $("#quadro").fadeIn(); $("#mensagem").html("Digite os campos corretamente !");
            $("#cnome").val('').focus();
            $("#cemail").val(''); $("#cmsg").val('');
            return false;
        } else {
            var nome = $("#cnome").val();
            var email = $("#cemail").val();
            var msg = $("#cmsg").val();
            $.post("send.php", { nome: nome, email: email, msg: msg }, function (mostrar) {
                $("#quadro").fadeIn(); $("#mensagem").html(mostrar);
            });
        }
    });

})