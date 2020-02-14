<?php
require_once 'povrzuvanje.php';

echo "<script src='koshnica.js'>
</script>";

$selektiraj = "select slika from images where id_slika = 1 or id_slika = 90 or id_slika = 196 or id_slika = 321 or id_slika = 560 or id_slika = 664 or id_slika = 717 or id_slika = 1021 or id_slika = 1061 or id_slika = 1107 or id_slika = 1148 or id_slika = 1247 or id_slika = 1274";
$rezultat3 = mysql_query($selektiraj);
echo "<div style='text-align:center' align='center'>";
$ime_kola = array("Alfa Romeo", "Dodge", "Ferrari", "Ford", "Ford Mustang", "Hummer", "Jaguar", "Lamborghini", "Lexus", "Lotus", "Porsche", "Rinspeed", "Volvo");
$cena_kola = array("€ 15.000", "€ 22.000", "€ 19.500", "€ 24.900", "€ 29.000", "€ 12.750", "€ 31.000", "€ 25.000", "€ 34.000", "€ 26.500", "€ 38.000", "€ 13.000", "€ 14.500");
for ($j = 0; $j < 13; $j++)
{
echo '<figure class="figura"><img class="sliki" src="data:image/png;base64,' . base64_encode(mysql_result($rezultat3, $j, 'slika')) . '" width="200" height="200" />';
echo '<a href="galerija' . ($j + 1) . '.php" style="text-decoration:none; "><figcaption class="tekst"><p><h3 style="color:darkblue; ">'.$ime_kola[$j].'</h3></p>Галерија</a><h2><input id="kvantitet'.$j.'" type="text" /><p><button onclick="dodadi'.$j.'()">Додади</button></p></figcaption></figure>';
}
echo "</div><html><head></head><body><button onclick='dodadi()'>Додади</button><div align='center' id='koshnica'></div></body></html>";
include_once 'footer.php';
?>