<?php
	$data = $_GET['data'];
	$data_formatada = date('d/m/Y', strtotime($data));
	echo $data_formatada;
?>