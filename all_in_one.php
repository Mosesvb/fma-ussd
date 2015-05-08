<?php
// echo $_GET['username'];
session_start();
require_once 'configureCyclos.php';
$accountService = new Cyclos\AccountService();
$transactionService = new Cyclos\TransactionService();
$transferService = new Cyclos\TransferService();
$transferFilterService = new Cyclos\TransferFilterService();
$userService = new Cyclos\UserService();

//dump session
// var_dump($_SESSION['userVo']);


//search user by user name
// try {
// 	$query = new stdclass();
// 	$query->username = 'fredy.willium' ;
// 	$t = $userService->locate($query);
// 	$_SESSION['userVo'] = $t;
// 	// var_dump($t);
// } catch (Cyclos\ServiceException $e) {
// 	if ($e->errorCode == "ENTITY_NOT_FOUND") {
// 		echo("username does not exist");
// 	}else{
// 		echo("Error with code $e->errorCode while performing the usersearch \n");
// 	}
// }

//current logged in user
// $status = $userService->getCurrentUser();
// var_dump($status);

// //accountVO
// $status = $accountService->load(2695791069257129417);
// // var_dump($status);
// // var_dump($status->owner);

// // //taarifa fupi working
// $query = new stdclass();
// // $query->accountId = '2695791069256474057';
// // $query->username = 'fredy.willium';
// $query->owner = $_SESSION['userVo'];
// $query->pageSize = 5;
// $ta = $transactionService->search($query);
// $max = sizeof($ta->pageItems);
// for($i = 0; $i < $max;$i++)
// {
// 	echo $ta->pageItems[$i]->amount;
// }
// var_dump($ta->pageItems[0]->amount);


// $query = new stdclass();
// // $query->accountId = '2695791069256474057';
// // $query->username = 'fredy.willium';
// $query->pageSize = 100 ;
// $t = $transferFilterService->search($query);
// var_dump($t);


// // echo $_GET['username'];
// $salio = $accountService->getAccountsSummary(array('username' => $_GET['username']),NULL);
// $balanceObj = $salio[0]->balance;
// $balance = number_format($balanceObj->amount,2,'.','');
// echo $balance;
// try {
// 	$salio = $accountService->getAccountsSummary(array('username' => $_GET['username']),NULL);
// 	$balanceObj = $salio[0]->balance;
// 	echo $balanceObj->amount;
// } catch (Cyclos\ServiceException $e) {
//     switch ($e->errorCode) {
//     	echo("error: $e->error");
//         // case "VALIDATION":
//         //     echo("Some of the parameters is invalid\n");
//         //     var_dump($e->error);
//         //     break;
//         // case "INSUFFICIENT_BALANCE":
//         //     echo("Insufficient balance to perform the payment\n");
//         //     break;
//         // case "MAX_AMOUNT_PER_DAY_EXCEEDED":
//         //     echo("Maximum amount exeeded today\n");
//         //     break;
//         // default:
//         //     echo("Error with code $e->errorCode while performing the payment\n");
//         //     break;
//     }
// }


// var_dump($balanceObj->amount);

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