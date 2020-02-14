<html><body>
	<?php
	for($j = 0; $j < 200; ++$j)
	{
echo <<<_END
<span class=".klasa"><img class="klasa" src="getImage.php?id_slika=$j" width="175" height="200" /></span>
_END;
}
?>
</body></html>
<style>.klasa {
	border:10px solid #888888;
	margin:1px;
}
</style>