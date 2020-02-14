<?php
require_once 'povrzuvanje.php';

echo "<h3><div align='center' id='koshnica'>Кошница</div></h3><script src='koshnica3.js'>
</script>";

$najmala_slika = 196 - 1;
$najgolema_slika = 320 + 1;
$selektiraj = "select slika from images where id_slika > $najmala_slika and id_slika < $najgolema_slika";
$rezultat3 = mysql_query($selektiraj);
$red = mysql_fetch_row($rezultat3);
$red2 = mysql_num_rows($rezultat3);
echo "<div align='center'>";
for ($j = 0; $j < (320 - (196 - 1)); $j++)
{
echo '<img class="sliki" src="data:image/png;base64,' . base64_encode(mysql_result($rezultat3, $j, 'slika')) . '" width="200" height="200" />';
}
echo "</div>";
include_once 'footer.php';
?>