<?php
session_start();
header('Content-Type: text/xml');
print '<?xml version="1.0" encoding="UTF-8"?>';
?>
	<page version="2.0">
		<title>Salio  </title>
		<div>
			Salio la ankaunti yako ni <?php include('salio_inc.php');?> Tsh
		</div>
		<navigation>
			<link accesskey="0" pageId="main_menu.php" type="back">Rudi Nyuma</link>
		</navigation>
	</page>

