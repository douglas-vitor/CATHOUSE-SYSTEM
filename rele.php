<html>
<head>
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
		shell_exec('gpio write 2 0');
	}
	else {
		shell_exec('gpio write 2 1');
	}
}

if (isset($_POST['l3'])){
	if ($bnt3==0){
		shell_exec('gpio write 3 0');
	}
	else {
		shell_exec('gpio write 3 1');
	}
}

if (isset($_POST['l4'])){
	if ($bnt4==0){
		shell_exec('gpio write 24 0');
	}
	else {
		shell_exec('gpio write 24 1');
	}
}

if (isset($_POST['l5'])){
	if ($bnt5==0){
		shell_exec('gpio write 25 0');
	}
	else {
		shell_exec('gpio write 25 1');
	}
}

if (isset($_POST['l6'])){
	if ($bnt6==0){
		shell_exec('gpio write 1 0');
	}
	else {
		shell_exec('gpio write 1 1');
	}
}

if (isset($_POST['l7'])){
	if ($bnt7==0){
		shell_exec('gpio write 4 0');
	}
	else {
		shell_exec('gpio write 4 1');
	}
}

if (isset($_POST['l8'])){
	if ($bnt8==0){
		shell_exec('gpio write 5 0');
	}
	else {
		shell_exec('gpio write 5 1');
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
		shell_exec('gpio write 2 1');
	}
	else {
		shell_exec('gpio write 2 0');
	}
}

if (isset($_POST['l11'])){
	if ($bnt3==0){
		shell_exec('gpio write 3 1');
	}
	else {
		shell_exec('gpio write 3 0');
	}
}

if (isset($_POST['l12'])){
	if ($bnt4==0){
		shell_exec('gpio write 24 1');
	}
	else {
		shell_exec('gpio write 24 0');
	}
}

if (isset($_POST['l13'])){
	if ($bnt5==0){
		shell_exec('gpio write 25 1');
	}
	else {
		shell_exec('gpio write 25 0');
	}
}

if (isset($_POST['l14'])){
	if ($bnt6==0){
		shell_exec('gpio write 1 1');
	}
	else {
		shell_exec('gpio write 1 0');
	}
}

if (isset($_POST['l15'])){
	if ($bnt7==0){
		shell_exec('gpio write 4 1');
	}
	else {
		shell_exec('gpio write 4 0');
	}
}

if (isset($_POST['l16'])){
	if ($bnt8==0){
		shell_exec('gpio write 5 1');
	}
	else {
		shell_exec('gpio write 5 0');
	}
}

$btn1 = exec('gpio read 0');
$btn2 = exec('gpio read 2');
$btn3 = exec('gpio read 3');
$btn4 = exec('gpio read 24');
$btn5 = exec('gpio read 25');
$btn6 = exec('gpio read 1');
$btn7 = exec('gpio read 4');
$btn8 = exec('gpio read 5');
?>
<script>
	aaa = '<?php echo $btn1; ?>';
	troca11 = function() {
	var element2 = document.getElementById("out011");
    if (aaa == 0) {
		element2.style.display = 'block';
    } else if (aaa == 1) {  
		element2.style.display = 'none';
	}}

	aa = '<?php echo $btn1; ?>';
	troca1 = function() {
	var element2 = document.getElementById("out01");
    if (aa == 0) {
		element2.style.display = 'none';
    } else if (aa == 1) {  
		element2.style.display = 'block';
	}}
	
	bbb = '<?php echo $btn2; ?>';
	troca22 = function() {
	var element2 = document.getElementById("out022");
    if (bbb == 0) {
		element2.style.display = 'block';
    } else if (bbb == 1) {  
		element2.style.display = 'none'; 
	}}

        bb = '<?php echo $btn2; ?>';
        troca2 = function() {
        var element2 = document.getElementById("out02");
    if (bb == 0) {
	element2.style.display = 'none';
    } else if (bb == 1) {
	element2.style.display = 'block';
        }}

	ccc = '<?php echo $btn3; ?>';
	troca33 = function() {
	var element3 = document.getElementById("out033");
    if (ccc == 0) {
	element3.style.display = 'block';
    } else if (ccc == 1) {  
	element3.style.display = 'none';
	}} 

        cc = '<?php echo $btn3; ?>';
        troca3 = function() {
        var element3 = document.getElementById("out03");
    if (cc == 0) {
	element3.style.display = 'none';
    } else if (cc == 1) {
	element3.style.display = 'block';
        }}

	ddd = '<?php echo $btn4; ?>';
	troca44 = function() {
	var element4 = document.getElementById("out044");
    if (ddd == 0) {
	element4.style.display = 'block';
    } else if (ddd == 1) {  
	element4.style.display = 'none'; 
	}} 

        dd = '<?php echo $btn4; ?>';
        troca4 = function() {
        var element4 = document.getElementById("out04");
    if (dd == 0) {
	element4.style.display = 'none';
    } else if (dd == 1) {
	element4.style.display = 'block';
        }}

	eee = '<?php echo $btn5; ?>';
	troca55 = function() {
	var element5 = document.getElementById("out055");
    if (eee == 0) {
	element5.style.display = 'block';
    } else if (eee == 1) {  
	element5.style.display = 'none'; 
	}}

        ee = '<?php echo $btn5; ?>';
        troca5 = function() {
        var element5 = document.getElementById("out05");
    if (ee == 0) {
	element5.style.display = 'none';
    } else if (ee == 1) {
	element5.style.display = 'block';
        }}

	fff = '<?php echo $btn6; ?>';
	troca66 = function() {
	var element6 = document.getElementById("out066");
    if (fff == 0) {
	element6.style.display = 'block';
    } else if (fff == 1) {  
	element6.style.display = 'none'; 
	}} 	

        ff = '<?php echo $btn6; ?>';
        troca6 = function() {
        var element6 = document.getElementById("out06");
    if (ff == 0) {
	element6.style.display = 'none';
    } else if (ff == 1) {
	element6.style.display = 'block';
        }}

	ggg = '<?php echo $btn7; ?>';
	troca77 = function() {
	var element7 = document.getElementById("out077");
    if (ggg == 0) {
	element7.style.display = 'block';
    } else if (ggg == 1) {  
	element7.style.display = 'none'; 
	}} 

        gg = '<?php echo $btn7; ?>';
        troca7 = function() {
        var element7 = document.getElementById("out07");
    if (gg == 0) {
	element7.style.display = 'none';
    } else if (gg == 1) {
	element7.style.display = 'block';
        }}

	hhh = '<?php echo $btn8; ?>';
	troca88 = function() {
	var element8 = document.getElementById("out088");
    if (hhh == 0) {
	element8.style.display = 'block';
    } else if (hhh == 1) {  
	element8.style.display = 'none'; 
	}} 

        hh = '<?php echo $btn8; ?>';
        troca8 = function() {
        var element8 = document.getElementById("out08");
    if (hh == 0) {
	element8.style.display = 'none';
    } else if (hh == 1) {
	element8.style.display = 'block';
        }}
</script>
<title>.:: CATHOUSE ::.</title>
<link rel="shortcut icon" HREF="img/logo.png" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<link rel="stylesheet" href="css/main.css">
</head>
<body onload="troca1(); troca11(); troca2(); troca22(); troca3(); troca33(); troca4(); troca44(); troca5(); troca55(); troca6(); troca66(); troca7(); troca77(); troca8(); troca88()">
<div class="container">
<div class="navbar">
<b><a href="home.php">< HOME</a></b>
</div>
<form method="POST">
<button id="out01" name="l1" class="rele">RELE 1</button>
<button id="out011" name="l9" class="rele">RELE 1</button>


<button id="out02" name="l2" class="rele">RELE 2</button>
<button id="out022" name="l10" class="rele">RELE 2</button>


<button id="out03" name="l3" class="rele">RELE 3</button>
<button id="out033" name="l11" class="rele">RELE 3</button>


<button id="out04" name="l4" class="rele">RELE 4</button>
<button id="out044" name="l12" class="rele">RELE 4</button>


<button id="out05" name="l5" class="rele">RELE 5</button>
<button id="out055" name="l13" class="rele">RELE 5</button>


<button id="out06" name="l6" class="rele">RELE 6</button>
<button id="out066" name="l14" class="rele">RELE 6</button>


<button id="out07" name="l7" class="rele">RELE 7</button>
<button id="out077" name="l15" class="rele">RELE 7</button>


<button id="out08" name="l8" class="rele">RELE 8</button>
<button id="out088" name="l16" class="rele">RELE 8</button>


</form>



</div>
</body>
</html>