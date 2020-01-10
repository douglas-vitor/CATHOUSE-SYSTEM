<html>
<head>
<?php
function rea() {
	$fii = "data_arqs/config_file.cathouse";
	$openn = fopen($fii, "r");
	$view = fread($openn, filesize($fii));
	fclose($openn);
	return $view;
}

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
<body>

<div class="container" align="center">
<div class="navbar">
<font id="back"><a href="home.php"><</a></font>
<font id="title">Opções</font>
</div>
<div class="header">
<form id="sav" action="w_tmp.php" method="POST">

<div align="center"><p><font>Configurações</font></p></div>

<div align="center"><font><p>Sessão periféricos</p></font></div>
<div class="scroll-configu">
<fieldset>
<p>Endereço IP : <input type="text" name="pi" id="pi" value="<?php echo rea(); ?>" /></p>
</fieldset>

<fieldset><p>
Periférico 01 :
<input type="text" name="pe01" id="pe01" value="<?php echo rea1(); ?>" />
<br />
<select id="tipo01" name="tipo01">
  <option value="<?php echo tiporea1(); ?>"><?php echo tiporea1(); ?></option>
  <option value="iluminacao">Iluminação</option>
  <option value="tomada">Tomada</option>
</select></p></fieldset>

<fieldset><p>
Periférico 02 :
<input type="text" name="pe02" id="pe02" value="<?php echo rea2(); ?>" />
<br />
<select id="tipo02" name="tipo02">
  <option value="<?php echo tiporea2(); ?>"><?php echo tiporea2(); ?></option>
  <option value="iluminacao">Iluminação</option>
  <option value="tomada">Tomada</option>
</select></p></fieldset>

<fieldset><p>
Periférico 03 :
<input type="text" name="pe03" id="pe03" value="<?php echo rea3(); ?>" />
<br />
<select id="tipo03" name="tipo03">
  <option value="<?php echo tiporea3(); ?>"><?php echo tiporea3(); ?></option>
  <option value="iluminacao">Iluminação</option>
  <option value="tomada">Tomada</option>
</select></p></fieldset>

<fieldset><p>
Periférico 04 :
<input type="text" name="pe04" id="pe04" value="<?php echo rea4(); ?>" />
<br />
<select id="tipo04" name="tipo04">
  <option value="<?php echo tiporea4(); ?>"><?php echo tiporea4(); ?></option>
  <option value="iluminacao">Iluminação</option>
  <option value="tomada">Tomada</option>
</select></p></fieldset>

<fieldset><p>
Periférico 05 :
<input type="text" name="pe05" id="pe05" value="<?php echo rea5(); ?>" />
<br />
<select id="tipo05" name="tipo05">
  <option value="<?php echo tiporea5(); ?>"><?php echo tiporea5(); ?></option>
  <option value="iluminacao">Iluminação</option>
  <option value="tomada">Tomada</option>
</select></p></fieldset>

<fieldset><p>
Periférico 06 :
<input type="text" name="pe06" id="pe06" value="<?php echo rea6(); ?>" />
<br />
<select id="tipo06" name="tipo06">
  <option value="<?php echo tiporea6(); ?>"><?php echo tiporea6(); ?></option>
  <option value="iluminacao">Iluminação</option>
  <option value="tomada">Tomada</option>
</select></p></fieldset>

<fieldset><p>
Periférico 07 :
<input type="text" name="pe07" id="pe07" value="<?php echo rea7(); ?>" />
<br />
<select id="tipo07" name="tipo07">
  <option value="<?php echo tiporea7(); ?>"><?php echo tiporea7(); ?></option>
  <option value="iluminacao">Iluminação</option>
  <option value="tomada">Tomada</option>
</select></p></fieldset>

<fieldset><p>
Periférico 08 :
<input type="text" name="pe08" id="pe08" value="<?php echo rea8(); ?>" />
<br />
<select id="tipo08" name="tipo08">
  <option value="<?php echo tiporea8(); ?>"><?php echo tiporea8(); ?></option>
  <option value="iluminacao">Iluminação</option>
  <option value="tomada">Tomada</option>
</select></p></fieldset>
</div>

<div align="center"><p><input type="submit" name="salvar" id="salvar" value="SALVAR" /></p></div>
</form>
</div>



</div>
</div>
</body>
</html>

