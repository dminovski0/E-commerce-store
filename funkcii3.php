<?php
set_time_limit(360);
$host = 'localhost';
$database = 'e-komercija';
$user = 'root';
$pass = '';

$povrzuvanje = mysql_connect($host, $user, $pass) or die("Konekciska greska: " . mysql_error());
mysql_select_db($database, $povrzuvanje) or die("Selekcija na databazata: " . mysql_error());

$ime_na_tabela_sliki = "images";
$upit_sliki = "create table if not exists images (
	id_slika int unsigned not null auto_increment, 
ime_slika varchar(12) not null,
slika mediumblob,
tip_kola varchar(12) not null,
primary key(id_slika)
)";

	$rezultat = mysql_query($upit_sliki) or die("Rezultat greska: " . mysql_error());
	if ($rezultat == true)
	{
	for ($j = 1; $j < 1372; ++$j)
	{
//$vnes_sliki = "insert into images(ime_slika, slika, tip_kola) values('a$j', load_file('D:/Wallpapers/$j.jpg'), 'Alpha Romeo')";
$rezultat2 = mysql_query($vnes_sliki) or die("Vnes greska: " . mysql_error());
}
}
else
{
	echo "Tabelata postoi i e popolneta.";
}
/*$selektiraj = "select slika from images";
$rezultat3 = mysql_query($selektiraj);
if ($rezultat2 == false)
{
	die(mysql_error());
}
if ($rezultat == true)
{
	echo "Tocho.";
}
$red = mysql_fetch_row($rezultat3);
$red2 = mysql_num_rows($rezultat3);
for ($j = 1; $j < $red2; $j++)
{
echo '<a href="#"><img src="data:image/png;base64,' . base64_encode(mysql_result($rezultat3, $j, 'slika')) . '" width="200" height="200" /></a>';
}
*/
echo "<img src='$red[2]' width='100' height='100'/>";
echo ""  ;
?>