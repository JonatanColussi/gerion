<?php
	$titulo = $_POST['titulo'];
	$descricao = $_POST['descricao'];
	$valor = $_POST['valor'];
	$data = $_POST['data'];
	$quantidade = $_POST['quantidade'];
	$fonte = $_POST['fonte'];
	$cor = $_POST['cor'];
	$ultimo = $_POST['ultimo'];
	$quantidade = $quantidade+$ultimo-1;
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<title>GERION - Gerador de rifas online</title>

		<!-- Documentação -->
		<meta name="description" content="">
		<meta name="keywords" content="">
		<meta name="author" content="Jonatan Colussi">
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800" rel="stylesheet" type="text/css">

		<link rel="stylesheet" href="../css/impressao.css" type="text/css">
		<style type="text/css">
			table{
				font-family: <?php echo $fonte; ?>;
				color: <?php echo $cor; ?>;
				border: 1px solid <?php echo $cor; ?>;
			}
			table > tbody > tr{
				border: 1px solid <?php echo $cor; ?>;
			}
			table > tbody > tr > td{
				border: 1px dotted <?php echo $cor; ?>;
			}
			span{
				float: right;
				color: <?php echo $cor; ?>;;
				margin-right: 2%;
				font-family: 'Open Sans', sans-serif;
				font-weight: 300;
			}
		</style>
	</head>
	<body onload="self.print();">
		<table>
			<?php
				for($i = $ultimo; $i <= $quantidade; $i++){
					if(strlen($i) == 1){
						$i = '00'.$i;
					}
					else if(strlen($i) == 2){
						$i = '0'.$i;
					}
					echo '<tr>
							<td>
								Nº: '.$i.'<br><br><br>
								Nome: _______________________<br>
								_____________________________<br><br>
								Telefone: _____________________
							</td>';
					echo '<td>
								<div class="centro">'.$titulo.'</div><br>
								<div class="esquerda">'.$descricao.'</div>
								<div class="centro">Data do sorteio: '.$data.'<br>
													Valor: R$ '.$valor.'</div>
								<div class="direita">Nº: '.$i.'</div>
							</td>
						</tr>';

					if($i % 5 == 0 && $i != $quantidade){
						echo '</table>';
						echo '<span>GERION - Gerador de rifas online &copy; Jonatan Colussi</span>';
						echo '<div style="page-break-before: always;"></div>';
						echo '<table>';
					}
					else if($i == $quantidade){
						echo '</table>';
						echo '<span>GERION - Gerador de rifas online &copy; Jonatan Colussi</span>';
					}
				}
			?>
	</body>
</html>