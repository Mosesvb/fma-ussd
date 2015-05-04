<?php

require_once 'configureCyclos.php';

$accountService = new Cyclos\AccountService();
$transactionService = new Cyclos\TransactionService();
$transferService = new Cyclos\TransferService();

$status = $transferService->getData('2695791069256474057');
var_dump($status);

//load trans by number 2695791069256736201, 2695791069256342985
// $status = $transactionService->load("2695791069257129417");
// var_dump($status);

//salio
// $salio = $accountService->getAccountsSummary(array('username' => 'fredy.willium'),NULL);
// $balanceObj = $salio[0]->balance;
// echo $balanceObj->amount;
// var_dump($balanceObj->amount);

//status (2695791069256474057,2695791069257129417)
// $status = $accountService->getAccountStatus(2695791069257129417,NULL,NULL);
// var_dump($status);

//taarifa fupi (not working)
// $query = new stdclass();
// $query->accountId = '2695791069256474057';
// $status = $accountService->load(2695791069257129417);
// $query->pageSize = 5;
// $page = $accountService->searchAccountHistory($query);
// var_dump($page);

//accountVO
// $status = $accountService->load(2695791069257129417);
// var_dump($status);

//account history AccountHistoryData
// $status = $accountService->getAccountHistoryData(2695791069256474057,NULL);
// var_dump($status);

//account history AccountHistoryData
// $status = $accountService->getAccountHistoriesOverviewData();
// var_dump($status);

// $query = new stdclass();
// $query->accountId = '2695791069256474057';
// $query->username = 'fredy.willium';
// $status = $accountService->getAccountsSummary($query,NULL);
// var_dump($status);