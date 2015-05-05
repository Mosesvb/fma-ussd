<?php
session_start();
header('Content-Type: text/xml');
print '<?xml version="1.0" encoding="UTF-8"?>';
?>
<page version="2.0">
<div protocol="ussd">
        <input navigationId="form" title="Karibu, ndugu mteja tafadhali ingiza jina lako la utambulisho" name="username"/>
</div>
<navigation id="form" protocol="ussd">
        <link pageId="main_menu.php"></link>
</navigation>
</page>

