<?php

session_start();
include_once 'povrzuvanje.php';

if (isset($_SESSION['user']))
{
	$user = $_SESSION['user'];
	$logiran = TRUE;
	echo "<h3><span style='border:1px solid red; background-color:black; color:red; '>Логирани сте $user.</span></h3>";
}
else
{
	$logiran = FALSE;
}
echo <<<_END
<html>
<head>
<title>E-komercija</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<div align='center' style='color:red; font-family:serif; background-color:#000000; margin:0px; border-width:0px; link-active:red background-clip:border-box; text-decoration:none; '><a href='index.php' style='text-decoration:none; color:red;'><h1><b>Е-продавница за автомобили</b></h1></a><br />
<table style='border:1px solid red;'>
<tr>
<td style='border:1px solid red;'>
<span>
<a href='registracija.php' align='center' style='color:red; font-family:serif; background-color:#000000; margin:0px; border-width:0px; link-active:red background-clip:border-box; text-decoration:none; '>
<h3>
<b>Регистрирајте се</b>
</h3>
</a>
</span>
</td>
<td style='border:1px solid red;'><span><a href='logiranje.php' align='center' style='color:red; font-family:serif; background-color:#000000; margin:0px; border-width:0px; link-active:red background-clip:border-box; text-decoration:none; '><h3><b>Логирајте се</b></h3></a></span></td><td style='border:1px solid red;'><span><a href='odlogiranje.php' align='center' style='color:red; font-family:serif; background-color:#000000; margin:0px; border-width:0px; link-active:red background-clip:border-box; text-decoration:none; '><h3><b>Одлогирајте се</b></h3></a></span></td><td style='border:1px solid red;'><span><a href='narachuvanje.php' align='center' style='color:red; font-family:serif; background-color:#000000; margin:0px; border-width:0px; link-active:red background-clip:border-box; text-decoration:none; '><h3><b>Нарачајте</b></h3></a></span></td></tr></table><br /></div>
</body>
</html>
_END;

?>