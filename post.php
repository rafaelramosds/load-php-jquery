<?php
$pagina = $_GET['pag'];
$pagina = $pagina * 50;
$resposta = array();
for($i = 1; $i <= $pagina; $i++) {
	$resposta[] = ["titulo"=>"$i - Rafael"];
}
header("Content-Type: application/json");
echo json_encode($resposta);