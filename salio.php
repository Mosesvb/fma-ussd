<?php
session_start();
header('Content-Type: text/xml');
print '<?xml version="1.0" encoding="UTF-8"?>';
	function getBalance()
	{
		// create a new cURL resource
		$ch = curl_init();

		// set URL and other appropriate options
		curl_setopt($ch, CURLOPT_URL, "http://localhost/ussd/fungasha/salio_inc.php?username=".$_SESSION['username']);
		curl_setopt($ch, CURLOPT_HEADER, 0);

		// grab URL and pass it to the browser
		curl_exec($ch);

		// close cURL resource, and free up system resources
		curl_close($ch);

		// echo "http://localhost/ussd/fungasha/all_in_one.php?username=".$_SESSION['username'];
		// echo $_SESSION['username'];

	}
	// getBalance();
?>
	<page version="2.0">
		<div>
			Salio la ankaunti yako ni <?php getBalance(); ?> Tsh
		</div>
		<navigation>
			<link accesskey="0" pageId="main_menu.php" type="back">Rudi Nyuma</link>
		</navigation>
	</page>

