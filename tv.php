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
function k_power(){
	$tecla = $_GET['btn'];
	$tecla = base64_decode($tecla);
	if ($tecla == 'KEY_POWER'){
		exec('irsend SEND_ONCE ctrlhouse KEY_POWER');
	}
}
function k_vol_up(){
        $tecla = $_GET['btn'];
	$tecla = base64_decode($tecla);
        if ($tecla == 'KEY_VOL_UP'){
                exec('irsend SEND_ONCE ctrlhouse KEY_VOL_UP');
        }
}
function k_vol_down(){
	$tecla = $_GET['btn'];
	$tecla = base64_decode($tecla);
	if ($tecla == 'KEY_VOL_DOWN'){
		exec('irsend SEND_ONCE ctrlhouse KEY_VOL_DOWN');
	}
}
function k_um(){
        $tecla = $_GET['btn'];
        $tecla = base64_decode($tecla);
        if ($tecla == 'KEY_UM'){
                exec('irsend SEND_ONCE ctrlhouse KEY_UM');
        }
}
function k_dois(){
        $tecla = $_GET['btn'];
        $tecla = base64_decode($tecla);
        if ($tecla == 'KEY_DOIS'){
                exec('irsend SEND_ONCE ctrlhouse KEY_DOIS');
        }
}
function k_tres(){
        $tecla = $_GET['btn'];
        $tecla = base64_decode($tecla);
        if ($tecla == 'KEY_TRES'){
                exec('irsend SEND_ONCE ctrlhouse KEY_TRES');
        }
}
function k_quatro(){
        $tecla = $_GET['btn'];
        $tecla = base64_decode($tecla);
        if ($tecla == 'KEY_QUATRO'){
                exec('irsend SEND_ONCE ctrlhouse KEY_QUATRO');
        }
}
function k_cinco(){
        $tecla = $_GET['btn'];
        $tecla = base64_decode($tecla);
        if ($tecla == 'KEY_CINCO'){
                exec('irsend SEND_ONCE ctrlhouse KEY_CINCO');
        }
}
function k_seis(){
        $tecla = $_GET['btn'];
        $tecla = base64_decode($tecla);
        if ($tecla == 'KEY_SEIS'){
                exec('irsend SEND_ONCE ctrlhouse KEY_SEIS');
        }
}
function k_sete(){
        $tecla = $_GET['btn'];
        $tecla = base64_decode($tecla);
        if ($tecla == 'KEY_SETE'){
                exec('irsend SEND_ONCE ctrlhouse KEY_SETE');
        }
}
function k_oito(){
        $tecla = $_GET['btn'];
        $tecla = base64_decode($tecla);
        if ($tecla == 'KEY_OITO'){
                exec('irsend SEND_ONCE ctrlhouse KEY_OITO');
        }
}
function k_nove(){
        $tecla = $_GET['btn'];
        $tecla = base64_decode($tecla);
        if ($tecla == 'KEY_NOVE'){
                exec('irsend SEND_ONCE ctrlhouse KEY_NOVE');
        }
}
function k_zero(){
        $tecla = $_GET['btn'];
        $tecla = base64_decode($tecla);
        if ($tecla == 'KEY_ZERO'){
                exec('irsend SEND_ONCE ctrlhouse KEY_ZERO');
        }
}
function k_ch_up(){
        $tecla = $_GET['btn'];
        $tecla = base64_decode($tecla);
        if ($tecla == 'KEY_CH_UP'){
                exec('irsend SEND_ONCE ctrlhouse KEY_CH_UP');
        }
}
function k_ch_down(){
        $tecla = $_GET['btn'];
        $tecla = base64_decode($tecla);
        if ($tecla == 'KEY_CH_DOWN'){
                exec('irsend SEND_ONCE ctrlhouse KEY_CH_DOWN');
        }
}
function k_seta_cima(){
        $tecla = $_GET['btn'];
        $tecla = base64_decode($tecla);
        if ($tecla == 'KEY_SETA_CIMA'){
                exec('irsend SEND_ONCE ctrlhouse KEY_SETA_CIMA');
        }
}
function k_seta_baixo(){
        $tecla = $_GET['btn'];
        $tecla = base64_decode($tecla);
        if ($tecla == 'KEY_SETA_BAIXO'){
                exec('irsend SEND_ONCE ctrlhouse KEY_SETA_BAIXO');
        }
}
function k_seta_direita(){
        $tecla = $_GET['btn'];
        $tecla = base64_decode($tecla);
        if ($tecla == 'KEY_SETA_DIREITA'){
                exec('irsend SEND_ONCE ctrlhouse KEY_SETA_DIREITA');
        }
}
function k_seta_esquerda(){
        $tecla = $_GET['btn'];
        $tecla = base64_decode($tecla);
        if ($tecla == 'KEY_SETA_ESQUERDA'){
                exec('irsend SEND_ONCE ctrlhouse KEY_SETA_ESQUERDA');
        }
}
function k_enter(){
        $tecla = $_GET['btn'];
        $tecla = base64_decode($tecla);
        if ($tecla == 'KEY_ENTER'){
                exec('irsend SEND_ONCE ctrlhouse KEY_ENTER');
        }
}
function k_menu(){
        $tecla = $_GET['btn'];
        $tecla = base64_decode($tecla);
        if ($tecla == 'KEY_MENU'){
                exec('irsend SEND_ONCE ctrlhouse KEY_MENU');
        }
}
function k_exit(){
        $tecla = $_GET['btn'];
        $tecla = base64_decode($tecla);
        if ($tecla == 'KEY_EXIT'){
                exec('irsend SEND_ONCE ctrlhouse KEY_EXIT');
        }
}
function k_input(){
        $tecla = $_GET['btn'];
        $tecla = base64_decode($tecla);
        if ($tecla == 'KEY_INPUT'){
                exec('irsend SEND_ONCE ctrlhouse KEY_INPUT');
        }
}
function k_sound(){
        $tecla = $_GET['btn'];
        $tecla = base64_decode($tecla);
        if ($tecla == 'KEY_SOUND'){
                exec('irsend SEND_ONCE ctrlhouse KEY_SOUND');
        }
}
function k_pic_mode(){
        $tecla = $_GET['btn'];
        $tecla = base64_decode($tecla);
        if ($tecla == 'KEY_PIC_MODE'){
                exec('irsend SEND_ONCE ctrlhouse KEY_PIC_MODE');
        }
}
function k_pic_size(){
        $tecla = $_GET['btn'];
        $tecla = base64_decode($tecla);
        if ($tecla == 'KEY_PIC_SIZE'){
                exec('irsend SEND_ONCE ctrlhouse KEY_PIC_SIZE');
        }
}
function k_sleep(){
        $tecla = $_GET['btn'];
        $tecla = base64_decode($tecla);
        if ($tecla == 'KEY_SLEEP'){
                exec('irsend SEND_ONCE ctrlhouse KEY_SLEEP');
        }
}
function k_mute(){
        $tecla = $_GET['btn'];
        $tecla = base64_decode($tecla);
        if ($tecla == 'KEY_MUTE'){
                exec('irsend SEND_ONCE ctrlhouse KEY_MUTE');
        }
}
function k_info(){
        $tecla = $_GET['btn'];
        $tecla = base64_decode($tecla);
        if ($tecla == 'KEY_INFO'){
                exec('irsend SEND_ONCE ctrlhouse KEY_INFO');
        }
}


k_power();
k_vol_up();
k_vol_down();
k_um();
k_dois();
k_tres();
k_quatro();
k_cinco();
k_seis();
k_sete();
k_oito();
k_nove();
k_zero();
k_ch_up();
k_ch_down();
k_seta_cima();
k_seta_baixo();
k_seta_direita();
k_seta_esquerda();
k_enter();
k_menu();
k_exit();
k_input();
k_sound();
k_pic_mode();
k_pic_size();
k_sleep();
k_mute();
k_info();


?>

<body>

<div class="container" align="center">
<div class="navbar">
<font id="back"><a href="home.php"><</a></font>
<font id="title">TV</font>
</div>
<div class="header">

<div class="tv-control">
<form id="tv-c" method="GET">
<div class="espacamento">
<a href="?btn=<?php $key = 'KEY_POWER'; echo $key2 = base64_encode($key); ?>"><div class="btnpower"><img src="img/power-icon.png" id="ictv" /></div></a>
</div><div class="espacamento">
<a href="?btn=<?php $key = 'KEY_UM'; echo $key2 = base64_encode($key); ?>"><div class="btn1">1</div></a>
<a href="?btn=<?php $key = 'KEY_DOIS'; echo $key2 = base64_encode($key); ?>"><div class="btn2">2</div></a>
<a href="?btn=<?php $key = 'KEY_TRES'; echo $key2 = base64_encode($key); ?>"><div class="btn3">3</div></a>
<a href="?btn=<?php $key = 'KEY_QUATRO'; echo $key2 = base64_encode($key); ?>"><div class="btn4">4</div></a>
<a href="?btn=<?php $key = 'KEY_CINCO'; echo $key2 = base64_encode($key); ?>"><div class="btn5">5</div></a>
<a href="?btn=<?php $key = 'KEY_SEIS'; echo $key2 = base64_encode($key); ?>"><div class="btn6">6</div></a>
<a href="?btn=<?php $key = 'KEY_SETE'; echo $key2 = base64_encode($key); ?>"><div class="btn7">7</div></a>
<a href="?btn=<?php $key = 'KEY_OITO'; echo $key2 = base64_encode($key); ?>"><div class="btn8">8</div></a>
<a href="?btn=<?php $key = 'KEY_NOVE'; echo $key2 = base64_encode($key); ?>"><div class="btn9">9</div></a>
<a href="?btn=<?php $key = 'KEY_ZERO'; echo $key2 = base64_encode($key); ?>"><div class="btn0">0</div></a>
</div><div class="espacamento">
<a href="?btn=<?php $key = 'KEY_MENU'; echo $key2 = base64_encode($key); ?>"><div class="btnmenu">Menu</div></a>
<a href="?btn=<?php $key = 'KEY_EXIT'; echo $key2 = base64_encode($key); ?>"><div class="btnexit">Exit</div></a>
</div><div class="espacamento">
<a href="?btn=<?php $key = 'KEY_VOL_UP'; echo $key2 = base64_encode($key); ?>"><div class="btnvolup"><img src="img/vol-up-icon.png" id="ictv" /></div></a>
<a href="?btn=<?php $key = 'KEY_SETA_CIMA'; echo $key2 = base64_encode($key); ?>"><div class="btnsetacima"><img src="img/seta-cima-icon.png" id="ictv" /></div></a>
<a href="?btn=<?php $key = 'KEY_CH_UP'; echo $key2 = base64_encode($key); ?>"><div class="btnchup"><img src="img/ch-up-icon.png" id="ictv" /></div></a>
</div><div class="espacamento">
<a href="?btn=<?php $key = 'KEY_SETA_ESQUERDA'; echo $key2 = base64_encode($key); ?>"><div class="btnsetaesquerda"><img src="img/seta-esquerda-icon.png" id="ictv" /></div></a>
<a href="?btn=<?php $key = 'KEY_ENTER'; echo $key2 = base64_encode($key); ?>"><div class="btnenter">Enter</div></a>
<a href="?btn=<?php $key = 'KEY_SETA_DIREITA'; echo $key2 = base64_encode($key); ?>"><div class="btnsetadireita"><img src="img/seta-direita-icon.png" id="ictv" /></div></a>
</div>
<div class="espacamento">
<a href="?btn=<?php $key = 'KEY_VOL_DOWN'; echo $key2 = base64_encode($key); ?>"><div class="btnvoldown"><img src="img/vol-down-icon.png" id="ictv" /></div></a>
<a href="?btn=<?php $key = 'KEY_SETA_BAIXO'; echo $key2 = base64_encode($key); ?>"><div class="btnsetabaixo"><img src="img/seta-baixo-icon.png" id="ictv" /></div></a>
<a href="?btn=<?php $key = 'KEY_CH_DOWN'; echo $key2 = base64_encode($key); ?>"><div class="btnchdown"><img src="img/ch-down-icon.png" id="ictv" /></div></a>
</div><div class="espacamento">
<a href="?btn=<?php $key = 'KEY_INPUT'; echo $key2 = base64_encode($key); ?>"><div class="btninput">Input</div></a>
<a href="?btn=<?php $key = 'KEY_SOUND'; echo $key2 = base64_encode($key); ?>"><div class="btnsound">Sound</div></a>
<a href="?btn=<?php $key = 'KEY_PIC_MODE'; echo $key2 = base64_encode($key); ?>"><div class="btnpicmode">P.Mode</div></a>
<a href="?btn=<?php $key = 'KEY_PIC_SIZE'; echo $key2 = base64_encode($key); ?>"><div class="btnpicsize">P.Size</div></a>
<a href="?btn=<?php $key = 'KEY_SLEEP'; echo $key2 = base64_encode($key); ?>"><div class="btnsleep">sleep</div></a>
<a href="?btn=<?php $key = 'KEY_MUTE'; echo $key2 = base64_encode($key); ?>"><div class="btnmute">Mute</div></a>
<a href="?btn=<?php $key = 'KEY_INFO'; echo $key2 = base64_encode($key); ?>"><div class="btninfo">Info</div></a>
</div>


</form>
</div>


</div>
</div>
</body>
</html>
