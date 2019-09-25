<meta http-equiv="refresh" content="30;url=#"/>
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
<b><a href="home.php">< HOME</a></b>
</div>
<div class="info">
<h2>Temperatura</h2>
<h1><?php echo(exec('vcgencmd measure_temp')); ?></h1>

<p></p><p></p><p></p>

<h2>Outras informações</h2>
<h2><?php echo(exec('vcgencmd get_mem arm')); ?><br />
<?php echo(exec('vcgencmd get_mem gpu')); ?>
</h2>

</div>

</div>
</body>
</html>