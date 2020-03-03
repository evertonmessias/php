$(function () {

    var lar = $(window).width();var alt = $(window).height();

    $("#quadro").click(function () {
        $(this).fadeOut();
    });

    $("#botaoinserir").click(function () {
        if ($("#nome").val().length < 2 || $("#email").val().length < 2 || $("#tel").val().length < 2) {
            $("#quadro").fadeIn();$("#mensagem").html("Digite os campos corretamente !");
            $("#nome").val('').focus();
            $("#email").val('');$("#tel").val('');
            return false;
        } else {
            var nome = $("#nome").val();
            var email = $("#email").val();
            var tel = $("#tel").val();
            $.post("inseri.php", { nome: nome, email: email, tel: tel }, function (mostrar) {
                $("#quadro").fadeIn();$("#mensagem").html(mostrar);
            });
        }
    });    

    $("#botaologin").click(function () {
        if ($("#nome").val().length < 2 || $("#senha").val().length < 2  ||
        !$("input[type='radio']:checked").val()) {
            $("#quadro").fadeIn();$("#mensagem").html("Digite os campos corretamente !");
            $("#nome").val('').focus();
            $("#senha").val('');
            return false;
        } else {
            var nome = $("#nome").val();
            var senha = $("#senha").val();
            var server = $("input[type='radio']:checked").val();
            $.post("login.php", { nome: nome, senha: senha, server:server }, function (mostrar) {
                $("#quadro").fadeIn();$("#mensagem").html(mostrar);
            });
        }
    });

    $("#botaoalterar").click(function () {
        var idd=0;
        var total = $("#total").val();

        for(var i=1;i<=total;i++){
            if ($("#id"+i).prop('checked')) {
                idd = $("#id"+i).val();
            }
        }
        if (idd == 0) {
            $("#quadro").fadeIn();$("#mensagem").html("Escolha um ID !");
            return false;
        }
        else if ($("#anome").val().length < 2 || $("#aemail").val().length < 2 || $("#atel").val().length < 2) {
            $("#quadro").fadeIn();$("#mensagem").html("Digite os campos corretamente !");
            $("#anome").val('').focus(); $("#aemail").val(''); $("#atel").val('');
            return false;
        }
        else {
            var nome = $("#anome").val();
            var email = $("#aemail").val();
            var tel = $("#atel").val();
            $.post("altera.php", { idd: idd, nome: nome, email: email, tel: tel }, function (mostrar) {
                $("#quadro").fadeIn();$("#mensagem").html(mostrar);
            });
        }
    });    

    $("#botaoapagar").click(function () {
        var idd="";
        var total = $("#total").val();
        var chek = 0;

        for(var i=1;i<=total;i++){
            if ($("#id"+i).prop('checked')) {
                idd = idd + $("#id"+i).val() + ",";
                chek++;
            }
        }
        if (idd == "") {
            $("#quadro").fadeIn();$("#mensagem").html("Escolha um ID !");
            return false;
        }
        else {
            $.post("apaga.php", { idd: idd, chek: chek }, function (mostrar) {
                $("#quadro").fadeIn();$("#mensagem").html(mostrar);
            });
        }
    });


    $("#botaocontatos").click(function () {
        if ($("#cnome").val().length < 2 || $("#cemail").val().length < 2 || $("#cmsg").val().length < 2) {
            $("#quadro").fadeIn();$("#mensagem").html("Digite os campos corretamente !");
            $("#cnome").val('').focus();
            $("#cemail").val('');$("#cmsg").val('');
            return false;
        }else {
            var nome = $("#cnome").val();
            var email = $("#cemail").val();
            var msg = $("#cmsg").val();
            $.post("send.php", { nome: nome, email: email, msg: msg }, function (mostrar) {
                $("#quadro").fadeIn();$("#mensagem").html(mostrar);
            });
        }
    }); 

})