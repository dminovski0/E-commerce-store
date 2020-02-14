<?php
include_once 'povrzuvanje.php';
echo "<div class='main' align='center' style='border:5px solid #888888'><h3>Ве молиме внесете ги вашите податоци<h3>";
$greska = $user = $pass;

if (isset($_POST['user']))
{
	$user = $_POST['user'];
	$pass = $_POST['pass'];

	if ($user == '' || $pass == '')
	{
		$greska = "Сите полиња не се пополнети<br />";
	}
	else
	{
		$query = "SELECT user, pass FROM chlenovi 
		WHERE user='$user' AND pass='$pass'";

		if (mysql_num_rows(mysql_query($query)) == 0)
		{
			$greska = "<span class='greska'>Корисничкото име/Лозинката 
			се невалидни</span><br /><br />";
		}
		else
		{
			$_SESSION['user'] = $user;
			$_SESSION['pass'] = $pass;
			die("Сега сте логирани. Ве молиме <a href='index.php?view=$user'>" . "
				кликнете овде</a> за да продолжите.<br /><br />");
		}
	}
}

echo <<<_END
<form method='post' action='logiranje.php'>$greska
<table border=''>
<tr><td>
<span class='fieldname' style='font-size:25px'>Корисничко име</span></td><td><input type='text' 
maxlength='16' name='user' value='$user' style='font-size:25px'/></td></tr><br />
<tr><td><span class='fieldname' style='font-size:25px'>Лозинка</span></td><td><input type='password' 
maxlength='16' name='pass' value='$pass' style='font-size:25px'/></td><td></td></tr><table><br />
_END;
?>

<br />
<span class='fieldname'>&nbsp;</span>
<input type='submit' value='Логирај се' />
</form><br /></div>