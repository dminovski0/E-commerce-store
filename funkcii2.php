<?php
$host = 'localhost';
$database = 'e-komercija';
$user = 'root';
$pass = '';

$povrzuvanje = mysql_connect($host, $user, $pass) or die("Konekciska greska: " . mysql_error());
mysql_select_db($database, $povrzuvanje) or die("Selekcija na databazata: " . mysql_error());

$ime_na_tabela_sliki = "sliki2";
$upit_sliki = "create table if not exists sliki2 (
	id_slika int unsigned not null auto_increment, 
ime_slika varchar(12) not null,
slika mediumblob,
tip_kola varchar(12) not null,
primary key(id_slika)
)";

	$rezultat = mysql_query($upit_sliki) or die("Rezultat greska: " . mysql_error());
	$tip_kola = "";
	for ($j = 1; $j < 90; ++$j)
	{
		$vnes_sliki = "insert into sliki2(ime_slika, slika, tip_kola) values('avtomobil $j', load_file('D:/Wallpapers/$j.jpg'), '$tip_kola')";
$rezultat2 = mysql_query($vnes_sliki) or die("Vnes greska: " . mysql_error());
}
for ($j = 90; $j < 196; ++$j)
	{
		$vnes_sliki = "insert into sliki2(ime_slika, slika, tip_kola) values('avtomobil $j', load_file('D:/Wallpapers/$j.jpg'), '$tip_kola')";
$rezultat2 = mysql_query($vnes_sliki) or die("Vnes greska: " . mysql_error());
}
for ($j = 196; $j < 321; ++$j)
	{
		$vnes_sliki = "insert into sliki2(ime_slika, slika, tip_kola) values('avtomobil $j', load_file('D:/Wallpapers/$j.jpg'), '$tip_kola')";
$rezultat2 = mysql_query($vnes_sliki) or die("Vnes greska: " . mysql_error());
}
for ($j = 321; $j < 560; ++$j)
	{
		$vnes_sliki = "insert into sliki2(ime_slika, slika, tip_kola) values('avtomobil $j', load_file('D:/Wallpapers/$j.jpg'), '$tip_kola')";
$rezultat2 = mysql_query($vnes_sliki) or die("Vnes greska: " . mysql_error());
}
for ($j = 560; $j < 664; ++$j)
	{
		$vnes_sliki = "insert into sliki2(ime_slika, slika, tip_kola) values('avtomobil $j', load_file('D:/Wallpapers/$j.jpg'), '$tip_kola')";
$rezultat2 = mysql_query($vnes_sliki) or die("Vnes greska: " . mysql_error());
}
for ($j = 664; $j < 717; ++$j)
	{
		$vnes_sliki = "insert into sliki2(ime_slika, slika, tip_kola) values('avtomobil $j', load_file('D:/Wallpapers/$j.jpg'), '$tip_kola')";
$rezultat2 = mysql_query($vnes_sliki) or die("Vnes greska: " . mysql_error());
}
for ($j = 717; $j < 1021; ++$j)
	{
		$vnes_sliki = "insert into sliki2(ime_slika, slika, tip_kola) values('avtomobil $j', load_file('D:/Wallpapers/$j.jpg'), '$tip_kola')";
$rezultat2 = mysql_query($vnes_sliki) or die("Vnes greska: " . mysql_error());
}
for ($j = 1021; $j < 1061; ++$j)
	{
		$vnes_sliki = "insert into sliki2(ime_slika, slika, tip_kola) values('avtomobil $j', load_file('D:/Wallpapers/$j.jpg'), '$tip_kola')";
$rezultat2 = mysql_query($vnes_sliki) or die("Vnes greska: " . mysql_error());
}
for ($j = 1061; $j < 1107; ++$j)
	{
		$vnes_sliki = "insert into sliki2(ime_slika, slika, tip_kola) values('avtomobil $j', load_file('D:/Wallpapers/$j.jpg'), '$tip_kola')";
$rezultat2 = mysql_query($vnes_sliki) or die("Vnes greska: " . mysql_error());
}
for ($j = 1107; $j < 1148; ++$j)
	{
		$vnes_sliki = "insert into sliki2(ime_slika, slika, tip_kola) values('avtomobil $j', load_file('D:/Wallpapers/$j.jpg'), '$tip_kola')";
$rezultat2 = mysql_query($vnes_sliki) or die("Vnes greska: " . mysql_error());
}
for ($j = 1148; $j < 1247; ++$j)
	{
		$vnes_sliki = "insert into sliki2(ime_slika, slika, tip_kola) values('avtomobil $j', load_file('D:/Wallpapers/$j.jpg'), '$tip_kola')";
$rezultat2 = mysql_query($vnes_sliki) or die("Vnes greska: " . mysql_error());
}
for ($j = 1247; $j < 1274; ++$j)
	{
		$vnes_sliki = "insert into sliki2(ime_slika, slika, tip_kola) values('avtomobil $j', load_file('D:/Wallpapers/$j.jpg'), '$tip_kola')";
$rezultat2 = mysql_query($vnes_sliki) or die("Vnes greska: " . mysql_error());
}
for ($j = 1274; $j < 1372; ++$j)
	{
		$vnes_sliki = "insert into sliki2(ime_slika, slika, tip_kola) values('avtomobil $j', load_file('D:/Wallpapers/$j.jpg'), '$tip_kola')";
$rezultat2 = mysql_query($vnes_sliki) or die("Vnes greska: " . mysql_error());
}
/*if($j < 90)
	$tip_kola = "Alpha Romeo";
elseif($j < 196)
	$tip_kola = "Dodge";
elseif($j < 321)
	$tip_kola = "Ferrari";
elseif($j < 560)
	$tip_kola = "Ford";
elseif($j < 664)
	$tip_kola = "Ford Mustang";
elseif($j < 717)
	$tip_kola = "Hummer";
elseif($j < 1021)
	$tip_kola = "Jaguar";
elseif($j < 1061)
	$tip_kola = "Lamborghini";
elseif($j < 1107)
	$tip_kola = "Lexus";
elseif($j < 1148)
	$tip_kola = "Lotus";
elseif($j < 1247)
	$tip_kola = "Porsche";
elseif($j < 1274)
	$tip_kola = "Rinspeed";
elseif($j < 1372)
	$tip_kola = "Volvo";
	*/
$selektiraj = "select slika from sliki2 where id_slika < 90";
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
echo "<img src='$red[2]' width='100' height='100'/>";
echo ""  ;
?>