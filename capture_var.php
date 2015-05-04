<?php
session_start();
$_SESSION["phonenumber"] = $_REQUEST['abonent'];
$_SESSION["username"] = $_REQUEST['username'];

header('Content-Type: text/xml');
print '<?xml version="1.0" encoding="UTF-8"?>';
?>
<page version="2.0">
<!-- <title protocol="wap java">Send money</title> -->
<div protocol="ussd">
	<input navigationId="form" title="Karibu fungasha pesa, ndugu mteja tafadhali ingiza jina lako la utambulisho: <?php echo $username ?>" name="username"/>
</div>
<!-- <div protocol="wap java">
<input navigationId="form" title="Destination" name="dest"/><br/>
<input navigationId="form" title="Amount" name="amount" type="Number"/>
</div> -->
<navigation id="form" protocol="ussd">
	<link pageId="username.php"></link>
</navigation>
<!-- <navigation id="form" protocol="wap java">
<link pageId="transaction.php">OK</link>
</navigation> -->
<!-- <navigation>
	<link accesskey="0" pageId="index.xml" type="back">Back</link>
</navigation> -->
</page>