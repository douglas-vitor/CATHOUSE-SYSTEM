<?php
function verifica_funcs() {
$yes    = "yes";
$no     = "no";
$energia        = "yes";
$iluminacao     = "yes";
$tv             = "yes";
$player         = "yes";


	if($energia == $yes) {
		echo "<style> .controle { display: block; } </style>";
	} else {
		echo "<style> .controle { display: none; } </style>";
	}

	if($iluminacao == $yes) {
		echo "<style>.light { display: block; }</style>";
	} else {
		echo "<style>.light { display: none; }</style>";
	}

	if($tv == $yes) {
		echo "<style>.tv { display: block; }</style>";
	} else {
		echo "<style>.tv { display: none; }</style>";
	}

	if($player == $yes) {
		echo "<style> .player { display: block; } </style>";
	} else {
		echo "<style> .player { display: none; } </style>";
	}

}

function cat_ip() {
        $fii1 = "data_arqs/config_file.cathouse";
        $openn1 = fopen($fii1, "r");
        $view1 = fread($openn1, filesize($fii1));
        fclose($openn1);
        return $view1;
}
verifica_funcs();
?>
