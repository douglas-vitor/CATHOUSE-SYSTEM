<meta http-equiv="refresh" content="1;url=../player.php" />
<?php
$file=$_FILES['musicup']['name'];
$filetmp = $_FILES['musicup']['tmp_name'];
$updir = "../received_files/";
$date = new DateTime();
$mili = $date->getTimestamp();
$date = $date->format('H-i-s_u');
$newfilename = $updir.$date."_cathouse".$mili;

if (empty($file)) {
	//Verifica se arquivo foi recebido ou esta vazio.
	echo "Nenhuma musica selecionada.";
	echo "<script>location.href='../player.php';</script>";
	exit();
} else {
	$extensionfile = explode(".", $file);
	$extensionfile = end($extensionfile);
	$extensionfile = strtolower($extensionfile);
	$mp3 = "mp3";
	$wav = "wav";
	$wma = "wma";
	$mp4 = "mp4";
	//Verifica extensao de arquivo.
	if ($extensionfile == $mp3 XOR $extensionfile == $wav XOR $extensionfile == $wma XOR $extensionfile == $mp4) {
		//Verifica tamanho do arquivo.
		if ($_FILES['musicup']['size'] > 10000000) {
			echo "Arquivo maior que o limite de 10MB";
			echo "<script>location.href='../player.php';</script>";
			exit();
		} else {
			$file = addslashes($file);
			$file = trim($file);
			if(move_uploaded_file($filetmp, $newfilename.$file)){
				echo "<img src='../img/ok.png' width='100%' height='100%' />";
				echo "<script>location.href='../player.php';</script>";
			}
		}
	} else {
		echo "Extensão inválida.";
		echo "<script>location.href='../player.php';</script>";
		exit();
	}
}

?>
