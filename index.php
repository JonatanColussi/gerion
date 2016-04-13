<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<title>GERION - Gerador de rifas online</title>

		<!-- Documentação -->
		<meta name="description" content="">
		<meta name="keywords" content="">
		<meta name="author" content="Jonatan Colussi">

		<!-- JavaScript -->
		<script src="js/jquery.js" type="text/javascript"></script>
		<script src="js/script.js" type="text/javascript"></script>
		<script src="js/jquery.simplecolorpicker.js" type="text/javascript"></script>

		<!-- CSS -->
		<link rel="stylesheet" href="css/jquery.simplecolorpicker.css" type="text/css">
  		<link rel="stylesheet" href="css/jquery.simplecolorpicker-regularfont.css" type="text/css">
  		<link rel="stylesheet" href="css/jquery.simplecolorpicker-glyphicons.css" type="text/css">
  		<link rel="stylesheet" href="css/jquery.simplecolorpicker-fontawesome.css" type="text/css">
		<link rel="stylesheet" href="css/style.css" type="text/css">


		<!-- Fontes -->
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800" rel="stylesheet" type="text/css">
	</head>
	<body>
		<!-- Menu Horizontal -->
		<header>
			<h1>Gerion</h1>
			<h2>Gerador de rifas online</h2>
			<ul>
				<li><a href="sobre_sistema" class="sobre">Sobre o Sistema</a></li>
				<li><a href="sobre_dev" class="sobre">Sobre o Desenvolvedor</a></li>
			</ul>
		</header>
		<div class="box" id="sobre_sistema">
			<h1>Sobre o sistema...</h1>
			<br><br>
			<p>
				Tudo começou, com a dificuldade em criar bilhetes para a venda de rifas, também conhecidos como ação entre amigos,
				o processo levava um longo tempo, e era de uma certa dificuldade, pois tínhamos que colocar os números sequenciais
				todos à mão.
			</p>
			<br>
			<p>
				Logo surgiu, entre um grupo de amigos programadores, a ideia de criar um sistema que automatizasse esse processo. 
				Pensamos, Por que não uma plataforma Web? que pudesse ser acessada de qualquer computador com acesso a internet, 
				e de qualquer lugar, sendo isso totalmente gratuito e livre para ser utilizado por toda a comunidade.
			</p>
			<br>
			<p>
				Após serem discutidas várias idéias e propósitos, finalmente no dia 16 de março de 2015 foi lançado a primeira versão 
				do GERION, gerador de rifas online, feito de forma bem simples e básica, mas porém funcional. A primeira versão foi 
				construída utilizando somente a linguagem de programação PHP.
			</p>
			<br>
			<p>
				Hoje, dia 01 de novembro de 2015 foi lançada a segunda versão do sistema, que conta com um layout totalmente refeito,
				novas funcionalidades e novas tecnologias empregadas. Nessa segunda versão fora utilizadas as linguagens de programação 
				JavaScript com o Framework jQuery, para termos uma pagina mais limpa e dinâmica, assim como, o nosso velho conhecido PHP.
			</p>
			<a href="#" class="fechar_box">X</a>
		</div>
		<div class="box" id="sobre_dev">
		<div class="esquerda">
			<img src="img/devgatao.jpg">
			<h1>Jonatan Colussi</h1>
			<h4>17 Anos</h4>
			<h4>Porto Alegre - RS - Brasil</h4>
			<br>
			<h4>Telefone +555193972931</h4>
			<h4>Email: <a href="mailto:jonatancolussi81@gmail.com">jonatancolussi81@gmail.com</a></h4>
			<h4>Facebook: <a href="https://www.facebook.com/colussijonatan">/colussijonatan</a></h4>
			<h4>Site: <a href="http://jonatancolussi.esy.es">jonatancolussi.esy.es</a></h4>
		</div>
		<div class="direita">
			<h1>Sobre o dev...</h1>
			<br><br>
			<p>
				Nascido e criado praticamente toda a vida em Porto Alegre - RS, com 17 anos de idade, Desenvolvedor Web e Web Designer Freelancer, no momento cursando o primeiro semestre ANÁLISE E DES. DE SISTEMAS na <a class="sobre" href="http://www.fadergs.edu.br/" target="_BLANK">FADERGS</a>
			</p>
			<br>
			<p>
				Começou os estudos de programação e desenvolvimento Web em 2013, no 
				<a href="http://socialmarista.org.br/centro-social/polo-marista-de-formacao-tecnologica" target="_BLANK">Polo Marista de Formação Tecnologica, PMFTEC</a>,  
				Localizado dentro do <a href="http://socialmarista.org.br/cesmar" target="_BLANK">Centro Social Marista de Porto Alegre, CESMAR</a>, concluindo em 2015. 
				Fora os conhecimentos adquiridos por autodidatismo.
			</p>
			<br>
			<p>
				Jovem muito focado e determinado em seus objetivos. Desde pequeno, sempre soube aproveitar todas as oportunidades que lhe foram dadas.
			</p>
			<p>
				Apaixonado pela vida, pelas amizades e por novas tecnologias, e sempre buscando aprender algo inovador que possa trazer algum beneficio
				para a sociedade.
			</p>
		</div>
			<a href="#" class="fechar_box">X</a>
		</div>
		<div id="nova_versao" class="box">
		<br><br><br>
			<h1>Seja bem vindo(a) a nova versão do GERION</h1>
			<h2>O seu gerador de rifas online</h2>
			<br><br>
			<h3>Agora contando com os recursos de:</h3>
			<ul>
				<li>Alteração de Fontes</li>
				<li>Alteração de Cor</li>
			</ul>
			<a href="#" class="fechar_box">X</a>
		</div>

		<!-- Conteúdo -->
		<article>
			<form action="" id="rifa">
				Título<br>
				<input type="text" name="titulo" id="titulo" placeholder="Título"><br>
				Descrição<br>
				<textarea name="descricao" id="descricao" rows="4" placeholder="Descrição"></textarea><br>
				Valor<br>
				<input type="number" name="valor" id="valor" placeholder="Valor" step="0.5" min="0"><br>
				Data do Sorteio<br>
				<input type="date" name="data" id="data"><br>
				Quantidade de números<br>
				<input type="number" name="ultimo" id="ultimo" placeholder="Último número Gerado">
				<input type="number" name="quantidade" id="quantidade" placeholder="Quantidade" min="1">
				<span>&nbsp;</span>
			</form>

			<form action="" id="config">
				Fonte
				<select id="fonte">
					<option value="ALGERIAN " style="font-family: ALGERIAN ">ALGERIAN </option>
					<option value="Arial " style="font-family: Arial ">Arial </option>
					<option value="Blackadder ITC" style="font-family: Blackadder ITC">Blackadder ITC</option>
					<option value="Bradley Hand ITC " style="font-family: Bradley Hand ITC ">Bradley Hand ITC </option>
					<option value="Chiller" style="font-family: Chiller">Chiller</option>
					<option value="Comic Sans MS " style="font-family: Comic Sans MS ">Comic Sans MS </option>
					<option value="Monotype Corsiva " style="font-family: Monotype Corsiva ">Monotype Corsiva </option>
					<option value="Curlz MT" style="font-family: Curlz MT">Curlz MT</option>
					<option value="Freestyle Script" style="font-family: Freestyle Script">Freestyle Script</option>
					<option value="Harrington" style="font-family: Harrington">Harrington</option>
					<option value="Open Sans" style="font-family: Open Sans">Open Sans</option>
					<option value="Palace Script MT" style="font-family: Palace Script MT">Palace Script MT</option>
					<option value="Papyrus" style="font-family: Papyrus">Papyrus</option>
					<option value="Parchment" style="font-family: Parchment">Parchment</option>
					<option value="Playbill" style="font-family: Playbill">Playbill</option>
					<option value="Times New Roman" style="font-family: Times New Roman" selected>Times New Roman</option>
				</select>
				Cor<br>
				<select name="colorpicker-picker-longlist" id="cor">
				  <option value="#ac725e">#ac725e</option>
				  <option value="#d06b64">#d06b64</option>
				  <option value="#f83a22">#f83a22</option>
				  <option value="#fa573c">#fa573c</option>
				  <option value="#ff7537">#ff7537</option>
				  <option value="#ffad46">#ffad46</option>
				  <option value="#42d692">#42d692</option>
				  <option value="#16a765">#16a765</option>
				  <option value="#7bd148">#7bd148</option>
				  <option value="#b3dc6c">#b3dc6c</option>
				  <option value="#fbe983">#fbe983</option>
				  <option value="#fad165">#fad165</option>
				  <option value="#92e1c0">#92e1c0</option>
				  <option value="#9fe1e7">#9fe1e7</option>
				  <option value="#9fc6e7">#9fc6e7</option>
				  <option value="#4986e7">#4986e7</option>
				  <option value="#9a9cff">#9a9cff</option>
				  <option value="#b99aff">#b99aff</option>
				  <option value="#c2c2c2">#c2c2c2</option>
				  <option value="#000000" selected>#000000</option>
				  <option value="#cca6ac">#cca6ac</option>
				  <option value="#f691b2">#f691b2</option>
				  <option value="#cd74e6">#cd74e6</option>
				  <option value="#a47ae2">#a47ae2</option>
				</select>
				<a href="#" id="gerar">Gerar Rifas</a>
				<a href="#" id="gerar_mais">Imprimir mais números?</a>
			</form>
		</article>
		<a href="#result" id="esse"></a>
		<div id="result">
			<div id="borda">
				<div id="mostra_rifa">
				</div>
			</div>
			<a href="#" id="imprimir">Imprimir</a>
		</div>
		<div id="envia"></div>
	</body>
</html>