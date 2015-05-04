<?php
session_start();
$_SESSION["phonenumber"] = $_REQUEST['abonent'];
$_SESSION["username"] = $_REQUEST['username'];
header('Content-Type: text/xml');
print '<?xml version="1.0" encoding="UTF-8"?>';
?>
<page version="2.0">
<div protocol="ussd">
        <input navigationId="form" title="Karibu fungasha pesa, ndugu mteja tafadhali ingiza jina lako la utambulisho:" name="username"/>
</div>
<navigation protocol="ussd">
       <link accesskey="0" pageId="send-money.php" type="back">menu</link>
</navigation>
</page>