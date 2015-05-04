<?php
	session_start();
	header('Content-Type: text/xml');
	print '<?xml version="1.0" encoding="UTF-8"?>';
?>
	<?php

		require_once 'common.php';
		$con = getConnection();
		$query = "SELECT sphone, amount, username FROM carts inner join  cart_items on carts.id = cart_items.cart_id where status = 'unpaid' and username = 'fredy' LIMIT 0,1";
		$result = mysql_query($query, $con) or die('Query failed ' . mysql_error());
		if(mysql_num_rows($result) == 0)
		{
			return -1;
		}
		$data = mysql_fetch_array($result);
		$_SESSION["payee_phone"] = $data[0];
		$_SESSION["payee_username"] = $data['username'];
		$_SESSION["amount_paid"] = $data['amount'];
		// $i = 1;
		// while (	$data = mysql_fetch_array($result)) {
		// 	echo '<link accesskey="'.$i.'" pageId="lipa.php" protocol="ussd"> Lipa '.$data['amount'].' Tsh kwenda '.$data[0].'</link>';
		// 	$i++;
		// }
	?>
<page version="2.0">
<title protocol="wap java">Lipia Ankara</title>
<div protocol="ussd">
	<input navigationId="form" title="Tafadhali ingiza namba ya siri" name="pin"/>
</div>
	<navigation id="form" protocol="ussd">
        <link pageId="lipa.php"></link>
	</navigation>
	<navigation>
		 <link pageId="lipia_ankara.php">Rudi Nyuma</link>
	</navigation>
</page>