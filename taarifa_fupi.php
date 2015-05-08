<?php
session_start();
require_once 'configureCyclos.php';
$transactionService = new Cyclos\TransactionService();
header('Content-Type: text/xml');
print '<?xml version="1.0" encoding="UTF-8"?>';
echo '<page version="2.0"><title protocol="wap java">Taarifa Fupi</title>';
// //taarifa fupi working
$query = new stdclass();
$query->owner = $_SESSION['userVo'];
$query->pageSize = 5;
$ta = $transactionService->search($query);
$max = sizeof($ta->pageItems);
// $balance = number_format($balanceObj->amount,2,'.','');
for($i = 0; $i < $max; $i++)
{
	$date = explode('T', $ta->pageItems[$i]->date );
	$time = explode('.', $date[1] );
	echo '<div>'.$date[0].' '.$time[0].' '.number_format($ta->pageItems[$i]->amount,2,'.','').'Tsh </div>';
}

echo '</page>';
?>
