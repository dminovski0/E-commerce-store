<?php

$yourAddress = '@41.7465003,22.1823584';
echo <<<_END
<div align='center' style='color:red; background-color:#000000; '><h2>Посетете не во нашата канцеларија</h2></div>
<div align='center'><iframe width="640" height="480" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?q=$yourAddress&output=embed"></iframe></div>
<div align='center' style='color:red; background-color:#000000; '><h2>Контактирајте не</h2></div>
<h3>
<ul><li>E-mail: avtomobili@e-komercija.com;</li>
<li>Телефон: 389-70-123456;</li>
<li>Адреса: "Скоевска".</li></ul>
</h3>
<div align='center' style='color:red; background-color:#000000; '><h4>Страната користи колачиња</h4></div>
_END;

?>
