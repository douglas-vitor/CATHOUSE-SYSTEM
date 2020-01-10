<meta http-equiv="refresh" content="1;url=configu.php" />
<?php
$pi = $_POST["pi"];
$pi = strtr($pi, "'", "*");
$pi = trim($pi);
$pi = addslashes($pi);
$grav = "$pi";
$fi = "data_arqs/config_file.cathouse";


if (!$open = fopen($fi, "w+")) {
	echo "ERRO 001($fi)";
	exit;
}
if (!fwrite($open, $grav)) {
	echo "ERRO 002($fi)";
}
fclose($open);
 


 
$pe01 = $_POST["pe01"];
$pe01 = strtr($pe01, "'", "*");
$pe01 = trim($pe01);
$pe01 = addslashes($pe01);
$gravpe01 = "$pe01\r\n";
$fipe01 = "data_arqs/pe01_data.cathouse";


if (!$open1 = fopen($fipe01, "w+")) {
        echo "ERRO 1001($fipe01)";
        exit;
}
if (!fwrite($open1, $gravpe01)) {
        echo "ERRO 1002($fipe01)";
}
fclose($open1);
 

 
$pe02 = $_POST["pe02"];
$pe02 = strtr($pe02, "'", "*");
$pe02 = trim($pe02);
$pe02 = addslashes($pe02);
$gravpe02 = "$pe02\r\n";
$fipe02 = "data_arqs/pe02_data.cathouse";


if (!$open2 = fopen($fipe02, "w+")) {
        echo "ERRO 2001($fipe02)";
        exit;
}
if (!fwrite($open2, $gravpe02)) {
        echo "ERRO 2002($fipe02)";
}
fclose($open2);
 


 
$pe03 = $_POST["pe03"];
$pe03 = strtr($pe03, "'", "*");
$pe03 = trim($pe03);
$pe03 = addslashes($pe03);
$gravpe03 = "$pe03\r\n";
$fipe03 = "data_arqs/pe03_data.cathouse";


if (!$open3 = fopen($fipe03, "w+")) {
        echo "ERRO 3001($fipe03)";
        exit;
}
if (!fwrite($open3, $gravpe03)) {
        echo "ERRO 3002($fipe03)";
}
fclose($open3);
 

 
$pe04 = $_POST["pe04"];
$pe04 = strtr($pe04, "'", "*");
$pe04 = trim($pe04);
$pe04 = addslashes($pe04);
$gravpe04 = "$pe04\r\n";
$fipe04 = "data_arqs/pe04_data.cathouse";


if (!$open4 = fopen($fipe04, "w+")) {
        echo "ERRO 4001($fipe04)";
        exit;
}
if (!fwrite($open4, $gravpe04)) {
        echo "ERRO 4002($fipe04)";
}
fclose($open4);
 

 
$pe05 = $_POST["pe05"];
$pe05 = strtr($pe05, "'", "*");
$pe05 = trim($pe05);
$pe05 = addslashes($pe05);
$gravpe05 = "$pe05\r\n";
$fipe05 = "data_arqs/pe05_data.cathouse";


if (!$open5 = fopen($fipe05, "w+")) {
        echo "ERRO 5001($fipe05)";
        exit;
}
if (!fwrite($open5, $gravpe05)) {
        echo "ERRO 5002($fipe05)";
}
fclose($open5);
 

 
$pe06 = $_POST["pe06"];
$pe06 = strtr($pe06, "'", "*");
$pe06 = trim($pe06);
$pe06 = addslashes($pe06);
$gravpe06 = "$pe06\r\n";
$fipe06 = "data_arqs/pe06_data.cathouse";


if (!$open6 = fopen($fipe06, "w+")) {
        echo "ERRO 6001($fipe06)";
        exit;
}
if (!fwrite($open6, $gravpe06)) {
        echo "ERRO 6002($fipe06)";
}
fclose($open6);
 

 
$pe07 = $_POST["pe07"];
$pe07 = strtr($pe07, "'", "*");
$pe07 = trim($pe07);
$pe07 = addslashes($pe07);
$gravpe07 = "$pe07\r\n";
$fipe07 = "data_arqs/pe07_data.cathouse";


if (!$open7 = fopen($fipe07, "w+")) {
        echo "ERRO 7001($fipe07)";
        exit;
}
if (!fwrite($open7, $gravpe07)) {
        echo "ERRO 7002($fipe07)";
}
fclose($open7);
 

 
$pe08 = $_POST["pe08"];
$pe08 = strtr($pe08, "'", "*");
$pe08 = trim($pe08);
$pe08 = addslashes($pe08);
$gravpe08 = "$pe08\r\n";
$fipe08 = "data_arqs/pe08_data.cathouse";


if (!$open8 = fopen($fipe08, "w+")) {
        echo "ERRO 8001($fipe08)";
        exit;
}
if (!fwrite($open8, $gravpe08)) {
        echo "ERRO 8002($fipe08)";
}
fclose($open8);
 

 
$tipope01 = $_POST["tipo01"];
$tipope01 = strtr($tipope01, "'", "*");
$tipope01 = trim($tipope01);
$tipope01 = addslashes($tipope01);
$tipogravpe01 = "$tipope01";
$tipofipe01 = "data_arqs/tipope01_data.cathouse";


if (!$tipoopen1 = fopen($tipofipe01, "w+")) {
        echo "ERRO 11001($tipofipe01)";
        exit;
}
if (!fwrite($tipoopen1, $tipogravpe01)) {
        echo "ERRO 11002($fipe01)";
}
fclose($tipoopen1);
 

 
$tipope02 = $_POST["tipo02"];
$tipope02 = strtr($tipope02, "'", "*");
$tipope02 = trim($tipope02);
$tipope02 = addslashes($tipope02);
$tipogravpe02 = "$tipope02";
$tipofipe02 = "data_arqs/tipope02_data.cathouse";


if (!$tipoopen2 = fopen($tipofipe02, "w+")) {
        echo "ERRO 12001($tipofipe02)";
        exit;
}
if (!fwrite($tipoopen2, $tipogravpe02)) {
        echo "ERRO 12002($tipofipe02)";
}
fclose($tipoopen2);
 


 
$tipope03 = $_POST["tipo03"];
$tipope03 = strtr($tipope03, "'", "*");
$tipope03 = trim($tipope03);
$tipope03 = addslashes($tipope03);
$tipogravpe03 = "$tipope03";
$tipofipe03 = "data_arqs/tipope03_data.cathouse";


if (!$tipoopen3 = fopen($tipofipe03, "w+")) {
        echo "ERRO 13001($tipofipe03)";
        exit;
}
if (!fwrite($tipoopen3, $tipogravpe03)) {
        echo "ERRO 13002($tipofipe03)";
}
fclose($tipoopen3);
 

 
$tipope04 = $_POST["tipo04"];
$tipope04 = strtr($tipope04, "'", "*");
$tipope04 = trim($tipope04);
$tipope04 = addslashes($tipope04);
$tipogravpe04 = "$tipope04";
$tipofipe04 = "data_arqs/tipope04_data.cathouse";


if (!$tipoopen4 = fopen($tipofipe04, "w+")) {
        echo "ERRO 14001($tipofipe04)";
        exit;
}
if (!fwrite($tipoopen4, $tipogravpe04)) {
        echo "ERRO 14002($tipofipe04)";
}
fclose($tipoopen4);
 

 
$tipope05 = $_POST["tipo05"];
$tipope05 = strtr($tipope05, "'", "*");
$tipope05 = trim($tipope05);
$tipope05 = addslashes($tipope05);
$tipogravpe05 = "$tipope05";
$tipofipe05 = "data_arqs/tipope05_data.cathouse";


if (!$tipoopen5 = fopen($tipofipe05, "w+")) {
        echo "ERRO 15001($tipofipe05)";
        exit;
}
if (!fwrite($tipoopen5, $tipogravpe05)) {
        echo "ERRO 15002($tipofipe05)";
}
fclose($tipoopen5);
 

 
$tipope06 = $_POST["tipo06"];
$tipope06 = strtr($tipope06, "'", "*");
$tipope06 = trim($tipope06);
$tipope06 = addslashes($tipope06);
$tipogravpe06 = "$tipope06";
$tipofipe06 = "data_arqs/tipope06_data.cathouse";


if (!$tipoopen6 = fopen($tipofipe06, "w+")) {
        echo "ERRO 16001($tipofipe06)";
        exit;
}
if (!fwrite($tipoopen6, $tipogravpe06)) {
        echo "ERRO 16002($tipofipe06)";
}
fclose($tipoopen6);
 

 
$tipope07 = $_POST["tipo07"];
$tipope07 = strtr($tipope07, "'", "*");
$tipope07 = trim($tipope07);
$tipope07 = addslashes($tipope07);
$tipogravpe07 = "$tipope07";
$tipofipe07 = "data_arqs/tipope07_data.cathouse";


if (!$tipoopen7 = fopen($tipofipe07, "w+")) {
        echo "ERRO 17001($tipofipe07)";
        exit;
}
if (!fwrite($tipoopen7, $tipogravpe07)) {
        echo "ERRO 17002($tipofipe07)";
}
fclose($tipoopen7);
 

 
$tipope08 = $_POST["tipo08"];
$tipope08 = strtr($tipope08, "'", "*");
$tipope08 = trim($tipope08);
$tipope08 = addslashes($tipope08);
$tipogravpe08 = "$tipope08";
$tipofipe08 = "data_arqs/tipope08_data.cathouse";


if (!$tipoopen8 = fopen($tipofipe08, "w+")) {
        echo "ERRO 18001($tipofipe08)";
        exit;
}
if (!fwrite($tipoopen8, $tipogravpe08)) {
        echo "ERRO 18002($tipofipe08)";
}
fclose($tipoopen8);

?>

<img src="img/ok.png" width="100%" height="100%" />


