<?php
include_once 'povrzuvanje.php';

if (isset($_SESSION['user']))
{
	destroySession();
	echo "<div class='main' align='center' style='border:5px solid #888888; font-size:25px;'>Одлогирани сте. Ве молиме " . 
	"<a href='index.php'>кликнете овде</a> за да го освежите екранот.";
}
else echo "<div class='main' align='center' style='border:5px solid #888888; font-size:25px;'><br />" . 
"Не можете да се одлогирате затоа што не сте логирани";
?>