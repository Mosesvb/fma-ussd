<?php
require_once 'configureCyclos.php';
$accountService = new Cyclos\AccountService();
$transactionService = new Cyclos\TransactionService();
$transferService = new Cyclos\TransferService();

// echo $_GET['username'];
$salio = $accountService->getAccountsSummary(array('username' => $_GET['username']),NULL);
$balanceObj = $salio[0]->balance;
$balance = number_format($balanceObj->amount,2,'.','');
echo $balance;
?>