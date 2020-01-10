<html>
<head>
<!--
##################
#	Powered by : Cat Security
#	Todos os direitos reservados.
#	https://www.catsec.com.br
#	catsec@catsec.com.br
#####
-->

<title>Cat House-Demo 1.0</title>
<link rel="shortcut icon" HREF="img/logo.png" />
<meta name="description" content="Automação residencial.">
<meta name="author" content=".:: Cat Sec ::."/>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="theme-color" content="black">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<link rel="stylesheet" href="css/main.css">
<meta property="og:title" content=".:: Cat House ::." />
<meta property="og:description" content="Automação residencial." />
<meta property="og:type" content="Application" />
<meta property="og:url" content="https://www.catsec.com.br/" />
<meta property="og:image" content="img/logo.png" />
<meta property="og:site_name" content="Cat House"/>
<meta property="og:author" content="Cat Sec"/>
<style type="text/css">
html, body { overflow-x: hidden; }
</style>
</head>
<?php
function m_volup() {
        $screen_name = "catplay";
        $cmd = $_GET['m'];
        $cmd = base64_decode($cmd);
        if ($cmd == 'volup'){
                exec("sudo screen -S ".$screen_name." -p 0 -X stuff +");
        }
}
function m_back() {
        $screen_name = "catplay";
        $cmd = $_GET['m'];
        $cmd = base64_decode($cmd);
        if ($cmd == 'mback'){
                exec("sudo screen -S ".$screen_name." -p 0 -X stuff d");
        }
}
function m_resset() {
        $screen_name = "catplay";
        $cmd = $_GET['m'];
        $cmd = base64_decode($cmd);
        if ($cmd == 'mresset'){
                exec("sudo screen -S ".$screen_name." -p 0 -X stuff b");
        }
}
function m_play() {
	$list_screen=exec('sudo screen -ls | grep catplay');
	if (empty($list_screen)) {
		$url_music = " received_files/*.mp3";
		$screen_name = "catplay";
		$cmd = $_GET['m'];
		$cmd = base64_decode($cmd);
			if ($cmd == 'playall'){
				exec("sudo screen -dmS ".$screen_name." mpg123 -C --float --stereo ".$url_music);
		}
	}
}
function m_pause() {
        $screen_name = "catplay";
        $cmd = $_GET['m'];
        $cmd = base64_decode($cmd);
        if ($cmd == 'pause'){
                exec("sudo screen -S ".$screen_name." -p 0 -X stuff s");
        }
}
function m_stop() {
	$screen_name = "catplay";
	$cmd = $_GET['m'];
	$cmd = base64_decode($cmd);
	if ($cmd == 'stop'){
		exec("sudo screen -S catplay -p 0 -X stuff q");
	}
}
function m_next() {
	$screen_name = "catplay";
	$cmd = $_GET['m'];
	$cmd = base64_decode($cmd);
	if ($cmd == 'next'){
		exec("sudo screen -S ".$screen_name." -p 0 -X stuff f");
	}
}
function m_voldown() {
        $screen_name = "catplay";
        $cmd = $_GET['m'];
        $cmd = base64_decode($cmd);
        if ($cmd == 'voldown'){
                exec("sudo screen -S ".$screen_name." -p 0 -X stuff -");
        }
}

function m_selected() {
	$cmd = $_GET['m'];
	$cmd2 = $_GET['mu'];
        $cmd = strtr($cmd, "'", "*");
        $cmd = trim($cmd);
        $cmd = addslashes($cmd);
        $cmd2 = strtr($cmd2, "'", "*");
        $cmd2 = trim($cmd2);
        $cmd2 = addslashes($cmd2);
	$screen_name = "catplay";
	$list_screen = exec('sudo screen -ls | grep catplay');
	if (empty($cmd2)) { }
	if ($cmd == 'selected') {
		if (empty($list_screen)) {
			exec("sudo screen -dmS ".$screen_name." mpg123 -C --float --stereo 'received_files/".$cmd2."'");
		} else {
			exec("sudo screen -S ".$screen_name." -p 0 -X stuff q");
			sleep(1);
			exec("sudo screen -dmS ".$screen_name." mpg123 -C --float --stereo 'received_files/".$cmd2."'");
		}
	}
}

function m_remove() {
	$cmd = $_GET['m'];
	$cmd2 = $_GET['mur'];
	$list_screen = exec('sudo screen -ls | grep catplay');
	if ($cmd == 'remove') {
		if(empty($cmd2)) {}
		else {
			exec("sudo rm 'received_files/".$cmd2."'");
		}
	}
}


m_volup();
m_back();
m_resset();
m_play();
m_pause();
m_stop();
m_next();
m_voldown();
m_selected();
m_remove();
?>

<body>

<div class="container" align="center">
<div class="navbar">
<font id="back"><a href="home.php"><</a></font>
<font id="title">Player</font>
</div>
<div class="header">

<div class="control-player">
<form method="GET">
<a href="?m=<?php echo base64_encode('volup'); ?>"><img src="img/mvolup_icon.png" /></a>
<a href="?m=<?php echo base64_encode('mback'); ?>"><img src="img/mback_icon.png" /></a>
<a href="?m=<?php echo base64_encode('mresset'); ?>"><img src="img/mresset_icon.png" /></a>
<a href="?m=<?php echo base64_encode('playall'); ?>"><img src="img/mplay_icon.png" /></a>
<a href="?m=<?php echo base64_encode('pause'); ?>"><img src="img/mpause_icon.png" /></a>
<a href="?m=<?php echo base64_encode('stop'); ?>"><img src="img/mstop_icon.png" /></a>
<a href="?m=<?php echo base64_encode('next'); ?>"><img src="img/mnext_icon.png" /></a>
<a href="?m=<?php echo base64_encode('voldown'); ?>"><img src="img/mvoldown_icon.png" /></a>
</form>
</div>

<div class="list-player">
<b><font>LISTA DE REPRODUÇÃO : </font></b><br /><br />
<?php echo "<div align='left'>";
$row = exec("ls received_files/ | grep .mp3", $output);
while(list(,$row) = each($output)){
echo "<fieldset id='fiel'><div class='musica-remove'>";
echo "<a href='?m=remove&mur=$row'>";
echo " X </a>";
echo "</div><div class='musica-item'>";
echo "<a href='?m=selected&mu=$row'>";
echo $row, "<br />\n";
echo "</a>";
echo "</div></fieldset>";


}
echo '</div>';
?>
</div>

<form action="data_arqs/send_music.php" id="musicupform" name="musicupform" method="POST" enctype="multipart/form-data">
<input type="file" name="musicup" id="musicup" />
<a href="javascript:document.musicupform.submit();"><div class="submitmusicup"><img src="img/mupar_icon.png" width="38.0em" height="auto" /></div></a>
</form>

</div>
</div>
</body>
</html>
