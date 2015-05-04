<?php
session_start();
header('Content-Type: text/xml');
print '<?xml version="1.0" encoding="UTF-8"?>';
?>
<page version="2.0">
<title protocol="wap java">Send money</title>
<div><?php echo $_SESSION["phonenumber"] ?></div>
<navigation>
<link accesskey="0" pageId="send-money.php" type="back">Back</link>
<link accesskey="1" pageId="a01.xml">Main menu</link>
</navigation>
</page>