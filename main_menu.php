<?php
session_start();
$_SESSION["username"] = $_REQUEST['username'];
$_SESSION["phonenumber"] = $_REQUEST['abonent'];
header('Content-Type: text/xml');
print '<?xml version="1.0" encoding="UTF-8"?>';
?>
<page version="2.0">
<title protocol="wap java">Fungasha Pesa </title>
	<navigation>
		<link accesskey="1" pageId="salio.php" protocol="ussd">Salio</link>
		<link accesskey="2" pageId="taarifa_fupi.php" protocol="ussd">Taarifa Fupi</link>
		<link accesskey="3" pageId="lipia_ankara.php" protocol="ussd">lipia Ankara</link>
		<link accesskey="4" pageId="hamisha_fedha.php" protocol="ussd">Hamisha Fedha</link>
		<link accesskey="5" pageId="msaada.php" protocol="ussd">Kwa msaada zaidi</link>
	</navigation>
</page>