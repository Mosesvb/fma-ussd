<?php
require_once 'config.php';
function getConnection()
{
	$con = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD) or die('Could not connect: ' . mysql_error());
	if(!mysql_select_db(DB_NAME))
		die('Could not select database');
	return $con;
}

// function test()
// {
// 	$var = 0;
// 	$con = getConnection();
// 	$query = "SELECT sphone, amount FROM carts inner join  cart_items on carts.id = cart_items.cart_id where status = 'unpaid' and username = 'fredy'";
// 	$result = mysql_query($query, $con) or die('Query failed ' . mysql_error());
// 	if(mysql_num_rows($result) == 0)
// 	{
// 		return -1;
// 	}

// 	while (	$data = mysql_fetch_array($result)) {
// 		echo "Lipa ".$data["amount"]." Tsh kwenda ".$data[0];
// 	}
// }
// test();
?>