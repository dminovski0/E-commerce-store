<?php

include_once "povrzuvanje.php";
if (isset($_SESSION['user']))
{
echo "<div align='center'><h3>Нарачајте.</h3></div>";
echo "<div align='center' id='koshnica'></div>";
//$podatoci = $_COOKIE['podatoci'];
//echo "$podatoci";
}
else
echo "<div align='center'><h3>Не сте најавени.</h3></div>";

?>

<script src="koshnica3.js"></script>