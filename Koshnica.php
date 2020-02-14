<?php

require_once'povrzuvanje.php';
session_start();
if (isset($_POST["add_to_cart"]))
{
	if(isset($_SESSION["shopping_cart"]))
	{
$item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
if (!in_array($_GET["id"], $item_array_id))
{
			$count = count($_SESSION["shopping_cart"]);
			$item_array = array(
			'item_id' => $_GET["id"],
		'item_name' => $_POST["name"],
	'item_price' => $_POST["price"],
'item_quantity' => $_GET["quantity"]);
			$_SESSION["shopping_cart"][$count] = $item_array;
}
else
{
	echo '<script>alert("Item already added")</script>';
	echo '<script>window.location="Koshnica.php"</script>';
}
	}
	else
	{
		$item_array = array(
			'item_id' => $_GET["id"],
		'item_name' => $_POST["name"],
	'item_price' => $_POST["price"],
'item_quantity' => $_GET["quantity"]);
		$_SESSION["shopping_cart"][0] = $item_array;
	}
}

if (isset($_GET["action"]))
{
	if ($_GET["action"] == "delete")
	{
		foreach ($_SESSION["shopping_cart"] as $keys => $value)
		{
			if ($values["item_id"] == $_GET["id"])
			{
				unset($_SESSION["shoppint_cart"][$keys]);
				echo '<script>alert("Item removed")</script>';
				echo '<script>window.location="Koshnica.php"</script>';
			}
		}
	}
}
$kreiraj = "create table if not exists tbl_product (
	id int unsigned not null auto_increment, 
name varchar(12) not null,
image mediumblob,
price varchar(12) not null,
quantity varchar(12) not null,
primary key(id)
)";

$kreiraj2 = mysql_query($kreiraj);

for ($j = 1; $j < 4; ++$j)
	{
$vnes_sliki = "insert into tbl_product(id, name, image, price, quantity) values('$j', 'proizvod$j', 'D:/Wallpapers/$j.jpg', '$j * 1000', '10')";
$rezultat2 = mysql_query($vnes_sliki) or die("Vnes greska: " . mysql_error());
}
?>
<html>
<head>
<title>Kochnica</title>
</head>
<body>
	<br />
	<div class="container" style="width:700px;">
		<h3 align="center">Shopping cart</h3><br />
		<?php
$query = "select * from tbl_product order by id asc";
$result = mysql_query($query);
if (mysql_num_rows($result) > 0)
{
	while ($row = mysql_fetch_array($result))
	{
		?>
		<div class="col-md-4"></div>
		<form method="post" action="Koshnica.php?action=add&id=<?php echo $row["id"]; ?>">
			<img src="<?php echo $row["image"] ?>" class="img-responsive" /><br />
			<h4 class="text-info"><?php echo $row["name"]; ?></h4>
			<h4 class="text-danger">$ <?php echo $row["price"]; ?></h4>
			<input type="text" name="quantity" class="form-control" value="1" />
			<input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />
			<input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />
			<input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn_success" value="Add to Cart" />
		</form>
		<?php
	}
}
?>
<div style="clear:both;"></div>
<br />
<h3>Order details</h3>
<div class="table-responsive">
<table class="table table-bordered;">
<tr>
<th width="40%">Name</th>
<th width="10%">Quantity</th>
<th width="20%">Price</th>
<th width="15%">Total</th>
<th width="5%">Action</th>
</tr>
<?php
if (!empty($_SESSION["shopping_cart"]))
{
	$total = 0;
	foreach ($_SESSION["shopping_cart"] as $keys => $value)
	{
		?>
	
	<tr>
		<td><?php echo $values["item_name"]; ?></td>
		<td><?php echo $values["item_quantity"]; ?></td>
		<td>$ <?php echo $values["item_price"]; ?></td>
		<td><?php echo number_format($values["item_quantity"] * $values["item_price"], 2); ?></td>
		<td><a href="Koshnica.php?action=delete&=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a></td>
	</tr>
	<?php
	$total = $total + ($values["item_quantity"] * $values["item_price"]);
}
?>
<tr>
	<td colspan="3" align="right">Total</td>
	<td align="right">$ <?php echo number_format($total, 2); ?></td>
	<td></td>
</tr>
<?php
}
?>
</table>
</div>
	</div>
	<br />
</body>
</html>