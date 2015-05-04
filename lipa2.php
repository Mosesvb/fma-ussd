<?php
	// session_start();
	header('Content-Type: text/xml');
	print '<?xml version="1.0" encoding="UTF-8"?>';
?>
<page version="2.0">
<title protocol="wap java">Lipia Ankara</title>
	<navigation>
	<?php

		require_once 'common.php';

		$con = getConnection();
		$query = "SELECT sphone, amount FROM carts inner join  cart_items on carts.id = cart_items.cart_id where status = 'unpaid' and username = 'fredy' LIMIT 1,1";
		$result = mysql_query($query, $con) or die('Query failed ' . mysql_error());
		if(mysql_num_rows($result) == 0)
		{
			return -1;
		}
		$i = 1;
		while (	$data = mysql_fetch_array($result)) {
			echo '<link accesskey="'.$i.'" pageId="lipa.php" protocol="ussd"> Lipa '.$data['amount'].' Tsh kwenda '.$data[0].'</link>';
			$i++;
		}
	?>
	</navigation>
</page>