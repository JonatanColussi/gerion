<!DOCTYPE html> 
<html>
	<head>
		<title>GERION</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="style.css">
		<link href='http://fonts.googleapis.com/css?family=Shadows+Into+Light' rel='stylesheet' type='text/css'>
	</head>
	<body id="principal">
	<center><br><h1 style="font-family: 'Shadows Into Light', cursive; font-size:60px;">GERION</h1>
	<h4>Gerador de rifas online</h4>
	</center>
		<div id="formulario">
			<form method="POST" id="form">
				<input type="text" name="titulo" placeholder="Titulo"><br>
				<textarea name="descricao" placeholder="Descrição" rows="5"></textarea><br>
				<input type="number" name="valor" placeholder="Valor"><br>
				<input type="date" name="data"><br>
				<input type="number" name="ultimo_numero" placeholder="Ultimo número gerado" class="metade_input">&nbsp;&nbsp;&nbsp;
				<input type="number" name="quantidade_numeros" placeholder="Nova quantidade" class="metade_input"><br>
				<input type="submit" name="gerar" value="Gerar Rifas!"><br>
			</form>
		</div>
		<div id="modelos">
			<?php
				if(isset($_REQUEST['gerar'])){
					?>
					<script type="text/javascript">
						document.getElementById('formulario').style.display = 'none';
						document.getElementById('form').style.display = 'none';
					</script>
					<!--<form method="POST" id="edita_rifa">
					<select name="posicao_titulo">
						<option>Posição do Titulo</option>
						<option value="center">Centro</option>
						<option value="left">Esquerda</option>
						<option value="right">Direita</option>
					</select>
					<select name="posicao_descricao">
						<option>Posição da Descrição</option>
						<option value="center">Centro</option>
						<option value="left">Esquerda</option>
						<option value="right">Direita</option>
					</select>
					<select name="posicao_valor">
						<option>Posição do Valor</option>
						<option value="center">Centro</option>
						<option value="left">Esquerda</option>
						<option value="right">Direita</option>
					</select>
					<select name="posicao_data">
						<option>Posição da Data</option>
						<option value="center">Centro</option>
						<option value="left">Esquerda</option>
						<option value="right">Direita</option>
					</select>
					<input type="submit" value="Definir Posições" name="posicoes">
					</form>!-->
			<?php
				$titulo = $_POST['titulo'];
				$descricao = $_POST['descricao'];
				$valor = $_POST['valor'];
				$quantidade = $_POST['quantidade_numeros'];
				$ultimo_numero = $_POST['ultimo_numero'];
				$data = $_POST['data'];
				$numero_exemplo = $ultimo_numero + 1;
				session_start();
				$_SESSION['titulo'] = $titulo;
				$_SESSION['descricao'] = $descricao;
				$_SESSION['valor'] = $valor;
				$_SESSION['quantidade'] = $quantidade;
				$_SESSION['data'] = $data;
				$_SESSION['ultimo_numero'] = $ultimo_numero;

				/*if(isset($_REQUEST['posicoes'])){
					?>
					<script type="text/javascript">
						document.getElementById('formulario').style.display = 'none';
						document.getElementById('form').style.display = 'none';
					</script>
					<?php
					$posicao_data = $_POST['posicao_data'];
					$posicao_valor = $_POST['posicao_valor'];
					$posicao_descricao = $_POST['posicao_descricao'];
					$posicao_titulo = $_POST['posicao_titulo'];
					echo '<div id="modelo">';
					echo '<table class="modelo">
			    			<tr><td class="canhoto">
							<center>Nº: 001<br><br><br></center>
							Nome: _______________________<br>
							_____________________________<br><br>
							Telefone: _____________________';
					echo '</td><td class="divisor">';	
					echo '<span style="text-align:'.$posicao_titulo.'">'.$titulo.'</span><br><br>';
					echo '<div class="descricao">'.nl2br($descricao).'</div><br>';
					echo 'Data do sorteio: '.date("d/m/Y", strtotime($data)).'<br>';
					echo 'R$ '.$valor.'<br>';
					echo 'Nº: 001';
					echo '</tr></table>';
				}
				else{*/
					?>
					<br><br>
					<a href="javascript:window.history.go(-1)"><button>Editar Rifa</button></a>
					<?php
					echo '<div id="modelo">';
					echo '<table class="modelo">
			    			<tr><td class="canhoto">
							<center>Nº: '.$numero_exemplo.'<br><br><br></center>
							Nome: _______________________<br>
							_____________________________<br><br>
							Telefone: _____________________';
					echo '</td><td class="divisor">';	
					echo '<div style="text-align:center; width: 100%;">'.$titulo.'</div><br><br>';
					echo '<div class="descricao">'.nl2br($descricao).'</div><br>';
					echo 'Data do sorteio: '.date("d/m/Y", strtotime($data)).'<br>';
					echo '<div style="text-align:center; width: 100%;">Valor: R$ '.$valor.'</div>';
					echo '<div style="text-align:right; width: 100%;">Nº: '.$numero_exemplo.'</div>';
					echo '</tr></table></div>';
				//}
					?>
					<br><br><br><br><br><br><br><br>
						<a href="imprimir_mais_numeros.php"><button>Imprimir mais <?php echo $quantidade;?> Rifas?</button></a>
					<?php
				}
			?>
		</div>
	</body>
</html>