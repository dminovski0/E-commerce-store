<?php
include_once 'header.php';
set_time_limit(360);
$host = 'localhost';
$database = 'e-komercija';
$user = 'root';
$pass = '';

$povrzuvanje = mysql_connect($host, $user, $pass) or die("Konekciska greska: " . mysql_error());
mysql_select_db($database, $povrzuvanje) or die("Selekcija na databazata: " . mysql_error());

function destroySession()
{
	$_SESSION = array();

	if (session_id() == "" || isset($_COOKIE[session_name()]))
		setcookie(session_name(), '', time() - 2592000, '/');

	session_destroy();
}
?>
<style>
	@import url('styles.css');
</style>
<link rel='stylesheet' type='text/css' href='styles.css' >