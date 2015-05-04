<?php
require_once 'configureCyclos.php';

//Perform the payment from user c1 to c2
Cyclos\Configuration::setAuthentication("0756738274", "1234");

$transactionService = new Cyclos\TransactionService();
$paymentService     = new Cyclos\PaymentService();

try {
	$data = $transactionService->getPaymentData(
		array('username' => 'fredy.willium'),
		array('username' => 'neema.mshasha'));

	$parameters              = new stdclass();
	$parameters->from        = $data->from;
	$parameters->to          = $data->to;
	$parameters->type        = $data->paymentTypes[0];
	$parameters->amount      = 10;
	$parameters->description = "Test payment to user";

	$paymentResult = $paymentService->perform($parameters);
	if ($paymentResult->authorizationStatus == 'PENDING_AUTHORIZATION') {
		echo ("Not yet authorized\n");
	} else {
		echo ("Payment done with id $paymentResult->id\n");
	}
} catch (Cyclos\ServiceException $e) {
	switch ($e->errorCode) {
		case "VALIDATION":
			echo ("Some of the parameters is invalid\n");
			var_dump($e->error);
			break;
		case "INSUFFICIENT_BALANCE":
			echo ("Insufficient balance to perform the payment\n");
			break;
		case "MAX_AMOUNT_PER_DAY_EXCEEDED":
			echo ("Maximum amount exeeded today\n");
			break;
		default:
			echo ("Error with code $e->errorCode while performing the payment\n");
			break;
	}
}