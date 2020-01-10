<meta http-equiv='refresh' content='30;url=event.php' />
<?php
echo 'pagina incluida com sucesso!';
function u1() {
	$ufile = "u1.cathouse";
	$uopen = fopen($ufile, 'r');
	$uview = fread($uopen, filesize($ufile));
	fclose($uopen);
	return $uview;
}
function p1() {
	$pfile = "p1.cathouse";
	$popen = fopen($pfile, 'r');
	$pview = fread($popen, filesize($pfile));
	fclose($popen);
	return $pview;
}

$u1 = u1();
$p1 = p1();

if (isset($u1))
{
	require_once('cf.php');
	
	$mysqli = new mysqli($servidorc, $userc, $passc, $dbc);
	if (mysqli_connect_errno()) {
	die('Não foi possível conectar-se ao banco de dados: ' . mysqli_connect_error());
	exit();
	}
} else {
	echo "Algo deu errado, tente novamente mais tarde!";
	$mysqli->close();
}

$usuario = trim($u1);
$senha = trim($p1);

$usuario = addslashes($usuario);
$senha = addslashes($senha);

$usuario = strtr($usuario, "'", "*");
$senha = strtr($senha, "'", "*");

if( !$usuario || !$senha ){
	echo "<div align='center' style='position:absolute;width:100%;height:auto;top:25%;background-color:red;color:white;'>
		<b>Algo deu errado, tente novamente mais tarde.</b></div>";
	echo "<meta http-equiv='refresh' content='1;url=event.php' />";
    exit();
}

if($consultanot = mysqli_query($mysqli, "SELECT * FROM events WHERE ( `usuario` = '". $usuario ."') AND ( `senha` = '". $senha ."') ")){
$rownotice = mysqli_num_rows($consultanot);
mysqli_free_result($consultanot);
}

if( $rownotice >= 1 ){

$connot=$mysqli->query(" SELECT * FROM events WHERE ( `usuario` = '". $usuario ."') AND ( `senha` = '". $senha ."') ORDER BY id ASC LIMIT 0,1 ");
	while ($cnotice = mysqli_fetch_array($connot)) {
		$evname = $cnotice["evname"];
		$dia = $cnotice["dia"];
		$mes = $cnotice["mes"];
		$ano = $cnotice["ano"];
		$hora = $cnotice["hora"];
		$minuto = $cnotice["minuto"];
		$acao = $cnotice["acao"];
		$periferico = $cnotice["periferico"];

if ($acao == 1){
        $acao2 = "Ligar";
} else if ($acao == 0) {
        $acao2 = "Desligar";
}

$data = "$dia-$mes-$ano";
$data_now = date('d-m-Y');
$data2 = "$dia.$mes.$ano";
$data_now2 = date('d.m.Y');

if ($data2 < $data_now2 && $data2 != '..'){
	echo "<meta http-equiv='refresh' content='1;url=event.php' />";
	exit;
}
else if ($data == $data_now or $data != $data_now && $data != '--'){
	echo "<div class='ev-item'>";
	echo "<font id='title'><b>$evname</b></font>";
	echo "<font id='data-hora'>$dia/$mes/$ano _ $hora:$minuto</font>";
	echo "<p>$acao2 -> $periferico</p>";
	echo "<a href='#'><font id='dellev'><b>X</b></font></a>";
	echo "</div>";
} else if ($data == '--'){
	echo "<div class='ev-item'>";
	echo "<font id='title'><b>$evname</b></font>";
	echo "<font id='data-hora'>$hora:$minuto</font>";
	echo "<p>$acao2 -> $periferico</p>";
	echo "<a href='#'><font id='dellev'><b>X</b></font></a>";
	echo "</div>";
}
	
$connot->close();
} else {
	echo "<div align='center'><b>Nenhuma evento encontrado!</b></div>";
	$mysqli->close();
}
?>
