<html>
<head>
<?php
function rea1() {
        $fii1 = "data_arqs/pe01_data.cathouse";
        $openn1 = fopen($fii1, "r");
        $view1 = fread($openn1, filesize($fii1));
        fclose($openn1);
        return $view1;
}

function rea2() {
        $fii2 = "data_arqs/pe02_data.cathouse";
        $openn2 = fopen($fii2, "r");
        $view2 = fread($openn2, filesize($fii2));
        fclose($openn2);
        return $view2;
}

function rea3() {
        $fii3 = "data_arqs/pe03_data.cathouse";
        $openn3 = fopen($fii3, "r");
        $view3 = fread($openn3, filesize($fii3));
        fclose($openn3);
        return $view3;
}

function rea4() {
        $fii4 = "data_arqs/pe04_data.cathouse";
        $openn4 = fopen($fii4, "r");
        $view4 = fread($openn4, filesize($fii4));
        fclose($openn4);
        return $view4;
}

function rea5() {
        $fii5 = "data_arqs/pe05_data.cathouse";
        $openn5 = fopen($fii5, "r");
        $view5 = fread($openn5, filesize($fii5));
        fclose($openn5);
        return $view5;
}

function rea6() {
        $fii6 = "data_arqs/pe06_data.cathouse";
        $openn6 = fopen($fii6, "r");
        $view6 = fread($openn6, filesize($fii6));
        fclose($openn6);
        return $view6;
}

function rea7() {
        $fii7 = "data_arqs/pe07_data.cathouse";
        $openn7 = fopen($fii7, "r");
        $view7 = fread($openn7, filesize($fii7));
        fclose($openn7);
        return $view7;
}

function rea8() {
        $fii8 = "data_arqs/pe08_data.cathouse";
        $openn8 = fopen($fii8, "r");
        $view8 = fread($openn8, filesize($fii8));
        fclose($openn8);
        return $view8;
}


function tiporea1() {
        $tipofii1 = "data_arqs/tipope01_data.cathouse";
        $tipoopenn1 = fopen($tipofii1, "r");
        $tipoview1 = fread($tipoopenn1, filesize($tipofii1));
        fclose($tipoopenn1);
        return $tipoview1;
}

function tiporea2() {
        $tipofii2 = "data_arqs/tipope02_data.cathouse";
        $tipoopenn2 = fopen($tipofii2, "r");
        $tipoview2 = fread($tipoopenn2, filesize($tipofii2));
        fclose($tipoopenn2);
        return $tipoview2;
}

function tiporea3() {
        $tipofii3 = "data_arqs/tipope03_data.cathouse";
        $tipoopenn3 = fopen($tipofii3, "r");
        $tipoview3 = fread($tipoopenn3, filesize($tipofii3));
        fclose($tipoopenn3);
        return $tipoview3;
}

function tiporea4() {
        $tipofii4 = "data_arqs/tipope04_data.cathouse";
        $tipoopenn4 = fopen($tipofii4, "r");
        $tipoview4 = fread($tipoopenn4, filesize($tipofii4));
        fclose($tipoopenn4);
        return $tipoview4;
}

function tiporea5() {
        $tipofii5 = "data_arqs/tipope05_data.cathouse";
        $tipoopenn5 = fopen($tipofii5, "r");
        $tipoview5 = fread($tipoopenn5, filesize($tipofii5));
        fclose($tipoopenn5);
        return $tipoview5;
}

function tiporea6() {
        $tipofii6 = "data_arqs/tipope06_data.cathouse";
        $tipoopenn6 = fopen($tipofii6, "r");
        $tipoview6 = fread($tipoopenn6, filesize($tipofii6));
        fclose($tipoopenn6);
        return $tipoview6;
}

function tiporea7() {
        $tipofii7 = "data_arqs/tipope07_data.cathouse";
        $tipoopenn7 = fopen($tipofii7, "r");
        $tipoview7 = fread($tipoopenn7, filesize($tipofii7));
        fclose($tipoopenn7);
        return $tipoview7;
}

function tiporea8() {
        $tipofii8 = "data_arqs/tipope08_data.cathouse";
        $tipoopenn8 = fopen($tipofii8, "r");
        $tipoview8 = fread($tipoopenn8, filesize($tipofii8));
        fclose($tipoopenn8);
        return $tipoview8;
}


?>

<?php

if (isset($_POST['l1'])){
	if ($bnt1==0){
		shell_exec('gpio write 0 0');
	}
	else {
		shell_exec('gpio write 0 1');
	}
}

if (isset($_POST['l2'])){
	if ($bnt2==0){
		shell_exec('gpio write 1 0');
	}
	else {
		shell_exec('gpio write 1 1');
	}
}

if (isset($_POST['l3'])){
	if ($bnt3==0){
		shell_exec('gpio write 2 0');
	}
	else {
		shell_exec('gpio write 2 1');
	}
}

if (isset($_POST['l4'])){
	if ($bnt4==0){
		shell_exec('gpio write 3 0');
	}
	else {
		shell_exec('gpio write 3 1');
	}
}

if (isset($_POST['l5'])){
	if ($bnt5==0){
		shell_exec('gpio write 4 0');
	}
	else {
		shell_exec('gpio write 4 1');
	}
}

if (isset($_POST['l6'])){
	if ($bnt6==0){
		shell_exec('gpio write 5 0');
	}
	else {
		shell_exec('gpio write 5 1');
	}
}

if (isset($_POST['l7'])){
	if ($bnt7==0){
		shell_exec('gpio write 6 0');
	}
	else {
		shell_exec('gpio write 6 1');
	}
}

if (isset($_POST['l8'])){
	if ($bnt8==0){
		shell_exec('gpio write 21 0');
	}
	else {
		shell_exec('gpio write 21 1');
	}
}

if (isset($_POST['l9'])){
	if ($bnt1==0){
		shell_exec('gpio write 0 1');
	}
	else {
		shell_exec('gpio write 0 0');
	}
}

if (isset($_POST['l10'])){
	if ($bnt2==0){
		shell_exec('gpio write 1 1');
	}
	else {
		shell_exec('gpio write 1 0');
	}
}

if (isset($_POST['l11'])){
	if ($bnt3==0){
		shell_exec('gpio write 2 1');
	}
	else {
		shell_exec('gpio write 2 0');
	}
}

if (isset($_POST['l12'])){
	if ($bnt4==0){
		shell_exec('gpio write 3 1');
	}
	else {
		shell_exec('gpio write 3 0');
	}
}

if (isset($_POST['l13'])){
	if ($bnt5==0){
		shell_exec('gpio write 4 1');
	}
	else {
		shell_exec('gpio write 4 0');
	}
}

if (isset($_POST['l14'])){
	if ($bnt6==0){
		shell_exec('gpio write 5 1');
	}
	else {
		shell_exec('gpio write 5 0');
	}
}

if (isset($_POST['l15'])){
	if ($bnt7==0){
		shell_exec('gpio write 6 1');
	}
	else {
		shell_exec('gpio write 6 0');
	}
}

if (isset($_POST['l16'])){
	if ($bnt8==0){
		shell_exec('gpio write 21 1');
	}
	else {
		shell_exec('gpio write 21 0');
	}
}


$btn1 = exec('gpio read 0');
$btn2 = exec('gpio read 1');
$btn3 = exec('gpio read 2');
$btn4 = exec('gpio read 3');
$btn5 = exec('gpio read 4');
$btn6 = exec('gpio read 5');
$btn7 = exec('gpio read 6');
$btn8 = exec('gpio read 21');

?>
<script>
luz = 'iluminacao';
tomada = 'tomada';
tipo1 = '<?php echo tiporea1(); ?>';
tipo2 = '<?php echo tiporea2(); ?>';
tipo3 = '<?php echo tiporea3(); ?>';
tipo4 = '<?php echo tiporea4(); ?>';
tipo5 = '<?php echo tiporea5(); ?>';
tipo6 = '<?php echo tiporea6(); ?>';
tipo7 = '<?php echo tiporea7(); ?>';
tipo8 = '<?php echo tiporea8(); ?>';

	aaa = '<?php echo $btn1; ?>';
	troca11 = function() {
	var element2 = document.getElementById("out011");
    if (aaa == 0 && tipo1 == luz) {
        element2.style.backgroundColor = '#008000';
		element2.style.display = 'block';
    } else if (aaa == 1 && tipo1 == luz) {  
        element2.style.backgroundColor = '#FF0000';
		element2.style.display = 'none';
	} else if (tipo1 == tomada) {
	element2.style.display = 'none';
	} }

	aa = '<?php echo $btn1; ?>';
	troca1 = function() {
	var element2 = document.getElementById("out01");
    if (aa == 0 && tipo1 == luz) {
        element2.style.backgroundColor = '#008000';
		element2.style.display = 'none';
    } else if (aa == 1 && tipo1 == luz) {  
        element2.style.backgroundColor = '#FF0000';
		element2.style.display = 'block';
	} else if (tipo1 == tomada) {
	element2.style.display = 'none';
	} }

	bbb = '<?php echo $btn2; ?>';
	troca22 = function() {
	var element2 = document.getElementById("out022");
    if (bbb == 0 && tipo2 == luz) {
        element2.style.backgroundColor = '#008000';
	element2.style.display = 'block';
    } else if (bbb == 1 && tipo2 == luz) {  
        element2.style.backgroundColor = '#FF0000';
	element2.style.display = 'none'; 
	} else if (tipo2 == tomada) {
	element2.style.display = 'none';
	}}

        bb = '<?php echo $btn2; ?>';
        troca2 = function() {
        var element2 = document.getElementById("out02");
    if (bb == 0 && tipo2 == luz) {
        element2.style.backgroundColor = '#008000';
	element2.style.display = 'none';
    } else if (bb == 1 && tipo2 == luz) {
        element2.style.backgroundColor = '#FF0000';
	element2.style.display = 'block';
        } else if (tipo2 == tomada) {
	element2.style.display = 'none';
	}}

	ccc = '<?php echo $btn3; ?>';
	troca33 = function() {
	var element3 = document.getElementById("out033");
    if (ccc == 0 && tipo3 == luz) {
        element3.style.backgroundColor = '#008000';
	element3.style.display = 'block';
    } else if (ccc == 1 && tipo3 == luz) {  
        element3.style.backgroundColor = '#FF0000'; 
	element3.style.display = 'none';
	} else if (tipo3 == tomada) {
	element3.style.display = 'none';
	}} 

        cc = '<?php echo $btn3; ?>';
        troca3 = function() {
        var element3 = document.getElementById("out03");
    if (cc == 0 && tipo3 == luz) {
        element3.style.backgroundColor = '#008000';
	element3.style.display = 'none';
    } else if (cc == 1 && tipo3 == luz) {
        element3.style.backgroundColor = '#FF0000';
	element3.style.display = 'block';
        } else if (tipo3 == tomada) {
	element3.style.display = 'none';
	}}

	ddd = '<?php echo $btn4; ?>';
	troca44 = function() {
	var element4 = document.getElementById("out044");
    if (ddd == 0 && tipo4 == luz) {
        element4.style.backgroundColor = '#008000';
	element4.style.display = 'block';
    } else if (ddd == 1 && tipo4 == luz) {  
        element4.style.backgroundColor = '#FF0000';
	element4.style.display = 'none'; 
	} else if (tipo4 == tomada) {
	element4.style.display = 'none';
	}} 

        dd = '<?php echo $btn4; ?>';
        troca4 = function() {
        var element4 = document.getElementById("out04");
    if (dd == 0 && tipo4 == luz) {
        element4.style.backgroundColor = '#008000';
	element4.style.display = 'none';
    } else if (dd == 1 && tipo4 == luz) {
        element4.style.backgroundColor = '#FF0000';
	element4.style.display = 'block';
        } else if (tipo4 == tomada) {
	element4.style.display = 'none';
	}}

	eee = '<?php echo $btn5; ?>';
	troca55 = function() {
	var element5 = document.getElementById("out055");
    if (eee == 0 && tipo5 == luz) {
        element5.style.backgroundColor = '#008000';
	element5.style.display = 'block';
    } else if (eee == 1 && tipo5 == luz) {  
        element5.style.backgroundColor = '#FF0000';
	element5.style.display = 'none'; 
	} else if (tipo5 == tomada) {
	element5.style.display = 'none';
	}}

        ee = '<?php echo $btn5; ?>';
        troca5 = function() {
        var element5 = document.getElementById("out05");
    if (ee == 0 && tipo5 == luz) {
        element5.style.backgroundColor = '#008000';
	element5.style.display = 'none';
    } else if (ee == 1 && tipo5 == luz) {
        element5.style.backgroundColor = '#FF0000';
	element5.style.display = 'block';
        } else if (tipo5 == tomada) {
	element5.style.display = 'none';
	}}

	fff = '<?php echo $btn6; ?>';
	troca66 = function() {
	var element6 = document.getElementById("out066");
    if (fff == 0 && tipo6 == luz) {
        element6.style.backgroundColor = '#008000';
	element6.style.display = 'block';
    } else if (fff == 1 && tipo6 == luz) {  
        element6.style.backgroundColor = '#FF0000';
	element6.style.display = 'none'; 
	} else if (tipo6 == tomada) {
	element6.style.display = 'none';
	}} 	

        ff = '<?php echo $btn6; ?>';
        troca6 = function() {
        var element6 = document.getElementById("out06");
    if (ff == 0 && tipo6 == luz) {
        element6.style.backgroundColor = '#008000';
	element6.style.display = 'none';
    } else if (ff == 1 && tipo6 == luz) {
        element6.style.backgroundColor = '#FF0000';
	element6.style.display = 'block';
        } else if (tipo6 == tomada) {
	element6.style.display = 'none';
	}}

	ggg = '<?php echo $btn7; ?>';
	troca77 = function() {
	var element7 = document.getElementById("out077");
    if (ggg == 0 && tipo7 == luz) {
        element7.style.backgroundColor = '#008000';
	element7.style.display = 'block';
    } else if (ggg == 1 && tipo7 == luz) {  
        element7.style.backgroundColor = '#FF0000';
	element7.style.display = 'none'; 
	} else if (tipo7 == tomada) {
	element7.style.display = 'none';
	}} 

        gg = '<?php echo $btn7; ?>';
        troca7 = function() {
        var element7 = document.getElementById("out07");
    if (gg == 0 && tipo7 == luz) {
        element7.style.backgroundColor = '#008000';
	element7.style.display = 'none';
    } else if (gg == 1 && tipo7 == luz) {
        element7.style.backgroundColor = '#FF0000';
	element7.style.display = 'block';
        } else if (tipo7 == tomada) {
	element7.style.display = 'none';
	}}

	hhh = '<?php echo $btn8; ?>';
	troca88 = function() {
	var element8 = document.getElementById("out088");
    if (hhh == 0 && tipo8 == luz) {
        element8.style.backgroundColor = '#008000';
	element8.style.display = 'block';
    } else if (hhh == 1 && tipo8 == luz) {  
        element8.style.backgroundColor = '#FF0000';
	element8.style.display = 'none'; 
	} else if (tipo8 == tomada) {
	element8.style.display = 'none';
	}} 

        hh = '<?php echo $btn8; ?>';
        troca8 = function() {
        var element8 = document.getElementById("out08");
    if (hh == 0 && tipo8 == luz) {
        element8.style.backgroundColor = '#008000';
	element8.style.display = 'none';
    } else if (hh == 1 && tipo8 == luz) {
        element8.style.backgroundColor = '#FF0000';
	element8.style.display = 'block';
        } else if (tipo8 == tomada) {
	element8.style.display = 'none';
	}}
</script>

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

<body onload="troca1(); troca11(); troca2(); troca22(); troca3(); troca33(); troca4(); troca44(); troca5(); troca55(); troca6(); troca66(); troca7(); troca77(); troca8(); troca88()">

<div class="container" align="center">
<div class="navbar">
<font id="back"><a href="home.php"><</a></font>
<font id="title">Iluminação</font>
</div>
<div class="header">
<form method="post">
<div class="item">
<button id="out01" style="font-size: 2.0em;color: #FFFFFF;" name="l1"><?php echo rea1(); ?></button>
<button id="out011" style="font-size: 2.0em;color: #FFFFFF;" name="l9"><?php echo rea1(); ?></button>



<button id="out02" style="font-size: 2.0em;color: #FFFFFF;" name="l2"><?php echo rea2(); ?></button>
<button id="out022" style="font-size: 2.0em;color: #FFFFFF;" name="l10"><?php echo rea2(); ?></button>



<button id="out03" style="font-size: 2.0em;color: #FFFFFF;" name="l3"><?php echo rea3(); ?></button>
<button id="out033" style="font-size: 2.0em;color: #FFFFFF;" name="l11"><?php echo rea3(); ?></button>



<button id="out04" style="font-size: 2.0em;color: #FFFFFF;" name="l4"><?php echo rea4(); ?></button>
<button id="out044" style="font-size: 2.0em;color: #FFFFFF;" name="l12"><?php echo rea4(); ?></button>



<button id="out05" style="font-size: 2.0em;color: #FFFFFF;" name="l5"><?php echo rea5(); ?></button>
<button id="out055" style="font-size: 2.0em;color: #FFFFFF;" name="l13"><?php echo rea5(); ?></button>



<button id="out06" style="font-size: 2.0em;color: #FFFFFF;" name="l6"><?php echo rea6(); ?></button>
<button id="out066" style="font-size: 2.0em;color: #FFFFFF;" name="l14"><?php echo rea6(); ?></button>



<button id="out07" style="font-size: 2.0em;color: #FFFFFF;" name="l7"><?php echo rea7(); ?></button>
<button id="out077" style="font-size: 2.0em;color: #FFFFFF;" name="l15"><?php echo rea7(); ?></button>



<button id="out08" style="font-size: 2.0em;color: #FFFFFF;" name="l8"><?php echo rea8(); ?></button>
<button id="out088" style="font-size: 2.0em;color: #FFFFFF;" name="l16"><?php echo rea8(); ?></button>
</div>

</form>
</div>



</div>
</body>
</html>
