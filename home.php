<?php
session_start();
?>
<html>
<head>
<title>.:: CATHOUSE ::.</title>
<link rel="shortcut icon" HREF="img/logo.png" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<link rel="stylesheet" href="css/main.css">
</head>
<body>
<div class="container">
<div class="navbar">
<b><a href="home.php">HOME</a></b>
</div>
<div class="home">
<p><h2>Bem-Vindo <?php echo $_SESSION["user"]; ?><h2></p>
<a href="rele.php"><div class="um">RELÉs</div></a>
<a href="tv.php"><div class="dois">TV</div></a>
<a href="player.php"><div class="quatro">PLAYER</div></a>
<a href="info.php"><div class="tres">INFOS</div></a>


</div>

</div>
</body>
</html>