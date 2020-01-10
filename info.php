<meta http-equiv='refresh' content='30;url=#' />
<html>
<head>
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
<font id="title">Info</font>
</div>
<div class="header">
<div class="setup">
<div class="temp"><?php echo(exec('vcgencmd measure_temp')); ?></div>
<p><b>[Mem. Compartilhada CPU & GPU]</b></p>
<?php echo(exec('vcgencmd get_mem arm')); ?><br />
<?php echo(exec('vcgencmd get_mem gpu')); ?>
<p><b>[CPU]</b></p>

<br />processor       : 0
<br />model name      : ARMv7 Processor rev 4 (v7l)
<br />BogoMIPS        : 38.40
<br />Features        : half thumb fastmult vfp edsp neon vfpv3 tls vfpv4 idiva idivt vfpd32 lpae evtstrm crc32
<br />CPU implementer : 0x41
<br />CPU architecture: 7
<br />CPU variant     : 0x0
<br />CPU part        : 0xd03
<br />CPU revision    : 4
<br />
<br />processor       : 1
<br />model name      : ARMv7 Processor rev 4 (v7l)
<br />BogoMIPS        : 38.40
<br />Features        : half thumb fastmult vfp edsp neon vfpv3 tls vfpv4 idiva idivt vfpd32 lpae evtstrm crc32
<br />CPU implementer : 0x41
<br />CPU architecture: 7
<br />CPU variant     : 0x0
<br />CPU part        : 0xd03
<br />CPU revision    : 4
<br />
<br />processor       : 2
<br />model name      : ARMv7 Processor rev 4 (v7l)
<br />BogoMIPS        : 38.40
<br />Features        : half thumb fastmult vfp edsp neon vfpv3 tls vfpv4 idiva idivt vfpd32 lpae evtstrm crc32
<br />CPU implementer : 0x41
<br />CPU architecture: 7
<br />CPU variant     : 0x0
<br />CPU part        : 0xd03
<br />CPU revision    : 4
<br />
<br />processor       : 3
<br />model name      : ARMv7 Processor rev 4 (v7l)
<br />BogoMIPS        : 38.40
<br />Features        : half thumb fastmult vfp edsp neon vfpv3 tls vfpv4 idiva idivt vfpd32 lpae evtstrm crc32
<br />CPU implementer : 0x41
<br />CPU architecture: 7
<br />CPU variant     : 0x0
<br />CPU part        : 0xd03
<br />CPU revision    : 4
<br />
<br />Hardware        : BCM2835
<br />Revision        : a22082
<br />Serial          : 00000000c8a47177

<p><b>[Mem. Infos.]</b></p>


<br />MemTotal:         949452 kB
<br />MemFree:          565868 kB
<br />MemAvailable:     731952 kB
<br />Buffers:           26808 kB
<br />Cached:           200820 kB
<br />SwapCached:            0 kB
<br />Active:           204628 kB
<br />Inactive:         139400 kB
<br />Active(anon):     116816 kB
<br />Inactive(anon):    21656 kB
<br />Active(file):      87812 kB
<br />Inactive(file):   117744 kB
<br />Unevictable:           0 kB
<br />Mlocked:               0 kB
<br />SwapTotal:        102396 kB
<br />SwapFree:         102396 kB
<br />Dirty:                52 kB
<br />Writeback:             0 kB
<br />AnonPages:        116400 kB
<br />Mapped:            85580 kB
<br />Shmem:             22072 kB
<br />Slab:              23236 kB
<br />SReclaimable:      11168 kB
<br />SUnreclaim:        12068 kB
<br />KernelStack:        1728 kB
<br />PageTables:         3852 kB
<br />NFS_Unstable:          0 kB
<br />Bounce:                0 kB
<br />WritebackTmp:          0 kB
<br />CommitLimit:      577120 kB
<br />Committed_AS:    1456632 kB
<br />VmallocTotal:    1114112 kB
<br />VmallocUsed:           0 kB
<br />VmallocChunk:          0 kB
<br />CmaTotal:           8192 kB
<br />CmaFree:            6788 kB

</div></div>
</div>
</body>
</html>
