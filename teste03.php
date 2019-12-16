<html>
<head>
<title>IMC</title>
<meta charset="UTF-8"/>
<style type="text/css">
body{background-color: #ccc;}
fieldset,#resp{display: block;position: relative;margin: 0 auto;}
fieldset{background-color:#fff;width: 250px;height:260px;text-align: center;box-shadow: 5px 5px #808080;}
legend{background-color: #808080;color: white;width: 80px;}
input{width: 88px;}label{font-weight: bolder;}
input.campo{width: 180px;}
#botao1,#botao2{background-color: #808080;color: white;font-weight: bold;}
#resp{text-align: center;}
</style>
<script type="text/javascript" src="./jquery.js"></script>
<script type="text/javascript" >
$(function(){
	var form = $("formulario");
	var peso = form.peso.val;
	var altura = form.altura.val;
	$("botao1").click(function(){
	if(peso > 20 && peso < 280 && altura > 1 && altura < 2.5){		
		console.log(peso);console.log(altura);
	$.post("./teste03-2.php", {peso: peso, altura: altura}, function(mostrar){
            $('#resp').html(mostrar);})
	}else{$('#resp').html("<p>Dados incorretos<p>");} 
	});
	$("botao2").click(function(){
		
	});	
})
</script>
</head>
<body>
<form id="formulario" method="POST">
<fieldset><legend><h3>ICM</h3></legend><br>
<label><input class="campo" type="number" name="peso" step="0.1" placeholder="Digite Seu Peso" /></label><br><br>
<label><input class="campo" type="number" name="altura" step="0.1" placeholder="Digite Sua Altura" /></label><br><br>
<input id="botao1" type="button" value="CALCULAR">&nbsp;
<input id="botao2" type="reset" value="APAGAR"><br><br>
<div id="resp">Resposta</div>
</fieldset>
</form>

</body>
</html>
