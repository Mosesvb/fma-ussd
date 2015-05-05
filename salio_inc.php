<?php
session_start();
echo  $_SESSION["username"];
echo(1);
// require_once 'configureCyclos.php';

// $accountService = new Cyclos\AccountService();

// $salio = $accountService->getAccountsSummary(array('username' => $_SESSION["username"] ),NULL);
// $balanceObj = $salio[0]->balance;
// echo $balanceObj->amount;