<?php
set_time_limit(360);
$host = 'localhost';
$database = 'e-komercija';
$user = 'root';
$pass = '';

$povrzuvanje = mysql_connect($host, $user, $pass) or die("Konekciska greska: " . mysql_error());
mysql_select_db($database, $povrzuvanje) or die("Selekcija na databazata: " . mysql_error());

$selektiraj = "select slika from images";
$rezultat3 = mysql_query($selektiraj);
$red = mysql_fetch_row($rezultat3);
$red2 = mysql_num_rows($rezultat3);
for ($j = 1; $j < $red2; $j++)
{
echo '<a href="#"><img src="data:image/png;base64,' . base64_encode(mysql_result($rezultat3, $j, 'slika')) . '" width="200" height="200" /></a>';
}
?>