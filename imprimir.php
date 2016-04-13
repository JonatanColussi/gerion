<!DOCTYPE html>
<html>
	<head>
		<title>GERION</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body onload="self.print();">
		<?php
			session_start();
			$titulo = $_SESSION['titulo'];
			$descricao = $_SESSION['descricao'];
			$valor = $_SESSION['valor'];
			$quantidade = $_SESSION['quantidade'];
			$data = $_SESSION['data'];
			for($i = 1; $i <= $quantidade; $i++){
				if(strlen($i) == 1){
					$i = '00'.$i;
				}
				else if(strlen($i) == 2){
					$i = '0'.$i;
				}
				echo '<div id="modelo2">';
				echo '<table class="modelo2">';
				echo '<tr class="linha"><td class="canhoto2">
					  <center>Nº: '.$i.'<br><br><br></center>
					  Nome: _______________________<br>
					  _____________________________<br><br>
					  Telefone: _____________________';
				echo '</td><td class="divisor2">';	
				echo '<div style="text-align:center; width: 100%;">'.$titulo.'</div><br>';
				echo '<div class="descricao">'.nl2br($descricao).'</div><br>';
				echo 'Data do sorteio: '.date("d/m/Y", strtotime($data)).'<br>';
				echo '<div style="text-align:center; width: 100%;">Valor: R$ '.$valor.'</div>';
				echo '<div style="text-align:right; width: 100%;">Nº: '.$i.'</div>';
				echo '</tr>';
				echo "</table></div>";
				if($i % 5 == 0){
					echo '<div style="page-break-before: always;"></div>';
				}
			}
		?>
	</body>
</html>