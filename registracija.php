<?php
include_once 'povrzuvanje.php';

$query = "create table if not exists chlenovi (
	 
user varchar(20) not null,
pass varchar(12) not null,
primary key(user)
)";
$rezultat = mysql_query($query);
$greska = $user = $pass = "";
if (isset($_SESSION['user'])) destroySession();


if (isset($_POST['user']))
{
	$user = $_POST['user'];
	$pass = $_POST['pass'];

	if ($user == "" || $pass == "")
		$greska = "<h3>Сите полиња не се пополнети</h3><br /><br />";
	else
	{
		if (mysql_num_rows(mysql_query("SELECT * FROM chlenovi WHERE user='$user'")))
			$greska = "<h3>Тоа корисничко име веќе постои</h3><br /><br />";
		else
		{
			mysql_query("INSERT INTO chlenovi VALUES('$user', '$pass')");
			die("<h3>Профилот е креиран. Ве молиме да се логирате.</h3><br /><br />");
		}
	}
}
echo <<<_END
<div align='center' style='border:5px solid #888888'>
<form method='post' action='registracija.php'>$greska
<table border=''>
<tr><td>
<span class='fieldname' style='font-size:25px'>Корисничко име</span></td><td>
<input type='text' maxlenght='16' name='user' value='$user' style='font-size:25px'/></td>
<span id='info'></span><br /></br>
<tr><td><span class='fieldname' style='font-size:25px'>Лозинка</span></td><td>
<input type='text' maxlength='16' name='pass' value='$pass' style='font-size:25px'/></td></tr><table><br />
_END;
?>

<span class='fieldname'>&nbsp;</span>
<input type='submit' value='Регистрирај се' style='font-size:25px'/>
</form>
</div>